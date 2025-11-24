<?php
// Incluir Stripe SDK
require 'vendor/autoload.php';
use Stripe\Stripe;
use Stripe\Checkout\Session;

// Inicializar sessão
session_start();

// Ler variáveis do .env.json
$env = json_decode(file_get_contents('.env.json'), true);

// Configuração da base de dados
$servername = $env['DB_HOST'];
$username = $env['DB_USER'];
$password = $env['DB_PASSWORD'];
$dbname = $env['DB_NAME'];

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Definir chave secreta do Stripe
Stripe::setApiKey($env['STRIPE_SECRET_KEY']);

// Obter session_id da URL
$session_id = $_GET['session_id'] ?? null;

if ($session_id) {
    try {
        // Obter sessão de pagamento do Stripe
        $checkout_session = Session::retrieve($session_id);
        $user_id = $checkout_session->metadata->user_id ?? null;

        if ($user_id) {
            // Atualizar a base de dados para marcar como pago
            $sql = "UPDATE users SET is_paid = 1 WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $stmt->close();

            // Guardar o user_id na sessão
            $_SESSION['user_id'] = $user_id;

            // Redirecionar para a área do utilizador
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Erro: User ID não encontrado na sessão Stripe.";
        }
    } catch (Exception $e) {
        echo "Erro ao processar pagamento: " . $e->getMessage();
    }
} else {
    echo "Erro: Session ID não encontrado.";
}

// Fechar conexão
$conn->close();
?>
