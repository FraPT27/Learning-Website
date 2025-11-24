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

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Se já estiver logado, redireciona para dashboard.php.html
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

// Defina o array de ambiente com a chave secreta do Stripe
$env = [
    'STRIPE_SECRET_KEY' => ''
];

// Verifica se a chave do Stripe está definida
if (!isset($env['STRIPE_SECRET_KEY'])) {
    die("A chave de API do Stripe não está definida.");
}

// Se o usuário já estiver logado, redireciona para o dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe e sanitiza os dados do formulário
    $email = $_POST['email'] ?? '';
    $password_input = $_POST['password'] ?? '';
    $email = $conn->real_escape_string($email);

    if (!empty($email) && !empty($password_input)) {
        // Consulta para obter os dados do usuário
        $sql = "SELECT id, password, course_num, is_paid FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result === false) {
            die("Erro na consulta SQL: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            $user_data = $result->fetch_assoc();

            // Verifica se a senha está correta
            if (password_verify($password_input, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['id'];

                // Se já pagou, redireciona para o dashboard
                if ($user_data['is_paid'] == 1) {
                    header("Location: dashboard.php");
                    exit();
                }
                // Caso contrário, cria a sessão de pagamento conforme o curso selecionado
                else if ($user_data['course_num'] == 1) {
                    // Sessão de pagamento para US$ 20 (2000 centavos)
                    try {
                        \Stripe\Stripe::setApiKey($env['STRIPE_SECRET_KEY']);
                        $checkout_session = \Stripe\Checkout\Session::create([
                            'payment_method_types' => ['card'],
                            'line_items' => [[
                                'price_data' => [
                                    'currency' => 'usd',
                                    'product_data' => ['name' => 'Curso de Literacia Financeira Standard'],
                                    'unit_amount' => 2000, // 2000 centavos = US$20
                                ],
                                'quantity' => 1,
                            ]],
                            'mode' => 'payment',
                            'success_url' => 'http://localhost/Literacia%20Financeira/success.php?session_id={CHECKOUT_SESSION_ID}',
                            'cancel_url' => 'http://localhost/Literacia%20Financeira/cancel.php',
                            'metadata' => ['user_id' => $user_data['id']]
                        ]);
                        header("Location: " . $checkout_session->url);
                        exit();
                    } catch (Exception $e) {
                        $message = "Erro na criação da sessão de pagamento: " . $e->getMessage();
                    }
                }
                else if ($user_data['course_num'] == 2) {
                    // Sessão de pagamento para US$ 25 (2500 centavos)
                    try {
                        \Stripe\Stripe::setApiKey($env['STRIPE_SECRET_KEY']);
                        $checkout_session = \Stripe\Checkout\Session::create([
                            'payment_method_types' => ['card'],
                            'line_items' => [[
                                'price_data' => [
                                    'currency' => 'usd',
                                    'product_data' => ['name' => 'Curso de Literacia Financeira Premium'],
                                    'unit_amount' => 2500, // 2500 centavos = US$25
                                ],
                                'quantity' => 1,
                            ]],
                            'mode' => 'payment',
                            'success_url' => 'http://localhost/Literacia%20Financeira/success.php?session_id={CHECKOUT_SESSION_ID}',
                            'cancel_url' => 'http://localhost/Literacia%20Financeira/cancel.php',
                            'metadata' => ['user_id' => $user_data['id']]
                        ]);
                        header("Location: " . $checkout_session->url);
                        exit();
                    } catch (Exception $e) {
                        $message = "Erro na criação da sessão de pagamento: " . $e->getMessage();
                    }
                }
            } else {
                $message = "Senha ou email incorreto.";
            }
        } else {
            $message = "Usuário não encontrado.";
        }
    } else {
        $message = "Preencha ambos Email e Senha.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Financial Literacy</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #28a745 0%, #218838 100%);
            overflow: hidden;
        }

        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            filter: blur(80px);
        }

        .blob:nth-child(1) {
            top: -200px;
            left: -200px;
        
        }

        .blob:nth-child(2) {
            bottom: -200px;
            right: -200px;
          
        }

        .login-container {
            position: relative;
            width: 400px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            transform: translateY(0);
            transition: transform 0.3s ease;
        }

        
        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-header h1 {
            color: #28a745;
            font-size: 2em;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .login-header p {
            color: #666;
            font-size: 0.9em;
        }

        .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #28a745;
            box-shadow: 0 0 10px rgba(40, 167, 69, 0.2);
            outline: none;
        }

        .form-group label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus ~ label,
        .form-group input:valid ~ label {
            top: -10px;
            left: 5px;
            font-size: 0.8em;
            color: #28a745;
            background: white;
            padding: 0 5px;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
        }

        .login-button {
            width: 100%;
            padding: 15px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-button:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
        }

        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease infinite;
            margin: 0 auto;
        }

        .additional-links {
            margin-top: 20px;
            text-align: center;
        }

        .additional-links a {
            color: #666;
            text-decoration: none;
            font-size: 0.9em;
            transition: color 0.3s ease;
        }

        .additional-links a:hover {
            color: #28a745;
        }

        .social-login {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-btn {
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .social-btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        .message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            animation: slideDown 0.5s ease;
        }

        .error-message {
            background: #ffe3e3;
            color: #ff4444;
            border: 1px solid #ffaaaa;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(10px, 10px); }
            50% { transform: translate(-10px, 5px); }
            75% { transform: translate(5px, -10px); }
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="blob"></div>
    <div class="blob"></div>

    <div class="login-container">
        <div class="login-header">
            <h1>Welcome Back! 👋</h1>
            <p>Sign in to continue your financial journey</p>
        </div>

        <form id="login-form" method="POST">
            <div class="form-group">
                <input type="email" name="email" id="email" required>
                <label for="email">Email Address</label>
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
                <span class="password-toggle" onclick="togglePassword()">👁️</span>
            </div>

            <button type="submit" class="login-button">
                <span class="button-text">Sign In</span>
                <div class="loading-spinner"></div>
            </button>
        </form>

        <div class="additional-links">
            <a href="forgot-password.php">Forgot Password?</a>
            <span style="margin: 0 10px; color: #ddd">|</span>
            <a href="register.php">Create Account</a>
        </div>

      

        <?php if (!empty($message)): ?>
            <div class="message error-message"><?php echo $message; ?></div>
        <?php endif; ?>
    </div>

    <script>
        // Password visibility toggle
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.querySelector('.password-toggle');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.textContent = '👁️';
            } else {
                passwordField.type = 'password';
                toggleIcon.textContent = '👁️';
            }
        }

        // Form submission loader
        document.getElementById('login-form').addEventListener('submit', function(e) {
            const button = this.querySelector('.login-button');
            const loader = this.querySelector('.loading-spinner');
            const buttonText = this.querySelector('.button-text');
            
            buttonText.style.display = 'none';
            loader.style.display = 'block';
            button.style.cursor = 'not-allowed';
            button.disabled = true;
        });

        // Input label animation
        document.querySelectorAll('.form-group input').forEach(input => {
            input.addEventListener('input', () => {
                if (input.value.trim() !== '') {
                    input.previousElementSibling.style.top = '-10px';
                    input.previousElementSibling.style.fontSize = '0.8em';
                }
            });
        });
    </script>
</body>
</html>