<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "financial_literacy";

// Criar conexão com a base de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar se o utilizador está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Verificar se o utilizador já pagou
$sql = "SELECT is_paid FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && $user['is_paid'] == 1) {
    // Se já pagou, redirecionar diretamente para o dashboard
    header("Location: dashboard.php");
    exit();
}

// Se ainda não pagou, gerar link de pagamento
$stripe_payment_url = "https://buy.stripe.com/test_5kAaHvc1Z1YgbVm3cc";

// Verificar se o pagamento foi concluído
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_payment'])) {
    // Atualizar a base de dados para marcar o utilizador como pago
    $update_sql = "UPDATE users SET is_paid = 1 WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("i", $user_id);
    $update_stmt->execute();

    // Redirecionar para o dashboard após pagamento bem-sucedido
    header("Location: dashboard.php");
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7fa; font-family: Arial, sans-serif; }
        .container { max-width: 500px; margin-top: 100px; }
        .card { padding: 20px; border-radius: 10px; }
        .btn-primary { background-color: #1a832f; border: none; }
        .btn-primary:hover { background-color: #0d6422; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow">
            <h3 class="text-center">Complete Your Payment</h3>
            <p class="text-center">To access your account, please complete the payment.</p>
            <div class="text-center">
                <a href="<?= $stripe_payment_url ?>" class="btn btn-primary w-100">Pay Now</a>
            </div>
            <hr>
            <form method="POST" class="text-center">
                <button type="submit" name="confirm_payment" class="btn btn-success w-100">I Have Paid</button>
            </form>
        </div>
    </div>
</body>
</html>
