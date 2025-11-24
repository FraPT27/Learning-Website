<?php
require 'vendor/autoload.php';
use Stripe\Stripe;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$env = json_decode(file_get_contents('.env.json'), true);
Stripe::setApiKey($env['STRIPE_SECRET_KEY']);

// Criar Logger
$logger = new Logger('webhook');
$logger->pushHandler(new StreamHandler('logs/webhook.log', Logger::DEBUG));

// Obter dados do Stripe
$payload = @file_get_contents('php://input');
$event = json_decode($payload, true);

// Verificar se o evento existe
if (!isset($event['type'])) {
    http_response_code(400);
    exit();
}

try {
    $pdo = new PDO(
        "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']}",
        $env['DB_USER'],
        $env['DB_PASSWORD'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    if ($event['type'] === 'checkout.session.completed') {
        $session = $event['data']['object'];

        // Obter o user_id da metadata do Stripe
        $userId = $session['metadata']['user_id'] ?? null;

        if (!$userId) {
            throw new Exception('User ID não encontrado na metadata.');
        }

        // Atualizar is_paid para 1 na base de dados
        $stmt = $pdo->prepare("UPDATE users SET is_paid = 1 WHERE id = :userId");
        $stmt->execute([':userId' => $userId]);

        $logger->info("Pagamento confirmado para o utilizador $userId");
    }

    http_response_code(200);
} catch (Exception $e) {
    $logger->error('Erro no Webhook: ' . $e->getMessage());
    http_response_code(500);
}
?>
