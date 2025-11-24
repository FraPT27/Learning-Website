<?php
session_start();

// Verificação básica de autenticação
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "financial_literacy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verificação de pagamento
$userId = $_SESSION['user_id'];
$sql = "SELECT is_paid FROM users WHERE id = $userId";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    $conn->close();
    header("Location: index.php");
    exit();
}

$userData = $result->fetch_assoc();
if ($userData['is_paid'] != 1) {
    $conn->close();
    header("Location: index.php");
    exit();
}



$conn->close();
?>