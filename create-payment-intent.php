<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
use Stripe\Stripe;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$env = json_decode(file_get_contents('.env.json'), true);

// Inicializar Stripe
Stripe::setApiKey($env['STRIPE_SECRET_KEY']);

// Criar Logger
$logger = new Logger('payment');
$logger->pushHandler(new StreamHandler('logs/stripe.log', Logger::DEBUG));

try {
    // Conectar ao banco de dados
    $pdo = new PDO(
        "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']}",
        $env['DB_USER'],
        $env['DB_PASSWORD'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Obter os dados da requisição
    $postData = json_decode(file_get_contents('php://input'), true);
    if (!isset($postData['payment_method_id']) || !isset($postData['user_id'])) {
        throw new Exception('Missing required fields');
    }

    $paymentMethodId = htmlspecialchars(strip_tags($postData['payment_method_id']));
    $userId = htmlspecialchars(strip_tags($postData['user_id']));

    if (empty($userId)) {
        throw new Exception('User ID is missing');
    }

    // Criar pagamento no Stripe
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => 1599,
        'currency' => 'usd',
        'payment_method' => $paymentMethodId,
        'confirm' => true,
        'metadata' => ['user_id' => $userId]
    ]);

    // Gravar pagamento na base de dados
    $stmt = $pdo->prepare("INSERT INTO enrollments (user_id, course_id, payment_status) VALUES (:userId, :courseId, :status)");
    $stmt->execute([
        ':userId' => $userId,
        ':courseId' => 1,
        ':status' => 'paid'
    ]);

    $logger->info("Pagamento bem-sucedido para o utilizador $userId");
    echo json_encode(['success' => true, 'intent_id' => $paymentIntent->id]);
} catch (Exception $e) {
    $logger->error('Erro: ' . $e->getMessage());
    http_response_code(400);
    echo json_encode(['error' => 'Erro no pagamento: ' . $e->getMessage()]);
}
?>
