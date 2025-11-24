<?php
require 'vendor/autoload.php';
use Stripe\Stripe;
use Stripe\Checkout\Session;

// Iniciar a sessão
session_start();

// Obter o ID do utilizador da sessão
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Utilizador não autenticado']);
    exit();
}

$user_id = $_SESSION['user_id'];

// Configurar Stripe
$env = json_decode(file_get_contents('.env.json'), true);
Stripe::setApiKey($env['STRIPE_SECRET_KEY']);

try {
    // Criar sessão do Stripe Checkout
    $checkout_session = Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => ['name' => 'Curso de Literacia Financeira'],
                'unit_amount' => 1599, // $15.99 em centavos
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'http://localhost/Literacia%20Financeira/success.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => 'http://localhost/Literacia%20Financeira/cancel.php',
        'metadata' => ['user_id' => $user_id] // Guardar o ID do utilizador no Stripe
    ]);

    echo json_encode(['id' => $checkout_session->id]);
} catch (Exception $e) {
    echo json_encode(['error' => 'Erro ao criar sessão de pagamento: ' . $e->getMessage()]);
}
?>
