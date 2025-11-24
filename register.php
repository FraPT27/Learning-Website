<?php
session_start();

// Conexão com a base de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "financial_literacy";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = ""; // Variável para mensagens de erro/sucesso

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $course_type = isset($_POST['course_type']) ? (int)$_POST['course_type'] : 0;

    // Validação da seleção do curso
    if ($course_type !== 1 && $course_type !== 2) {
        $message = "Please select a course package";
    } else {
        // Verificar se o email já existe
        $sql_check = "SELECT id FROM users WHERE email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $message = "This email is already registered.";
        } else {
            // Inserir novo utilizador
            $sql = "INSERT INTO users (name, email, password, course_num) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $name, $email, $password, $course_type);

            if ($stmt->execute()) {
                $message = "Registration successful! You can now log in.";
            } else {
                $message = "Error during registration. Please try again.";
            }

            $stmt->close();
        }
        $stmt_check->close();
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Training Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        .course-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .course-card {
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            background: white;
        }

        .course-card:hover {
            transform: translateY(-5px);
            border-color: #1a832f;
        }

        .course-card.selected {
            border-color: #1a832f;
            background: #f0fff4;
        }

        .course-card input[type="radio"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .course-price {
            font-size: 1.5em;
            color: #1a832f;
            font-weight: 600;
            margin: 10px 0;
        }

        .course-features {
            list-style: none;
            padding-left: 0;
            font-size: 0.9em;
        }

        .course-features li {
            padding: 5px 0;
            display: flex;
            align-items: center;
        }

        .course-features li i {
            color: #1a832f;
            margin-right: 8px;
        }

        .recommended-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #1a832f;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8em;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">Financial Training</a>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create an account</h1>
        <?php if (!empty($message)): ?>
            <div class="alert alert-info"> <?= htmlspecialchars($message) ?> </div>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <form action="register.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-4">
                            <h5 class="mb-3">Select Course Package:</h5>
                            <div class="course-options">
                                <label class="course-card">
                                    <input type="radio" name="course_type" value="1" required>
                                    <h5>Standard Course</h5>
                                    <div class="course-price">$20</div>
                                    <ul class="course-features">
                                        <li><i class="fas fa-check"></i>Basic financial concepts</li>
                                        <li><i class="fas fa-check"></i>Weekly lessons</li>
                                        <li><i class="fas fa-check"></i>Email support</li>
                                        <li><i class="fas fa-check"></i>Community access</li>
                                    </ul>
                                </label>

                                <label class="course-card">
                                    <input type="radio" name="course_type" value="2">
                                    <div class="recommended-badge">Most Popular</div>
                                    <h5>Premium Course</h5>
                                    <div class="course-price">$25</div>
                                    <ul class="course-features">
                                        <li><i class="fas fa-check"></i>All Standard features</li>
                                        <li><i class="fas fa-check"></i>Advanced strategies</li>
                                        <li><i class="fas fa-check"></i>1-on-1 coaching</li>
                                        <li><i class="fas fa-check"></i>Certification</li>
                                        <li><i class="fas fa-check"></i>Premium resources</li>
                                    </ul>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                    <p class="text-center mt-3">
                    Already have an account? <a href="login.php" class="text-primary">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Adiciona o efeito de seleção para os cartões de curso
        document.querySelectorAll('.course-card').forEach(card => {
            card.addEventListener('click', function() {
                // Remove as seleções anteriores
                document.querySelectorAll('.course-card').forEach(c => c.classList.remove('selected'));
                
                // Adiciona a classe de seleção ao cartão clicado
                this.classList.add('selected');
                
                // Marca o input radio correspondente
                this.querySelector('input[type="radio"]').checked = true;
            });
        });

        // Validação do formulário antes do envio
        document.querySelector('form').addEventListener('submit', function(e) {
            const courseSelected = document.querySelector('input[name="course_type"]:checked');
            if (!courseSelected) {
                e.preventDefault();
                alert('Please select a course package');
            }
        });
    </script>
</body>
</html>
