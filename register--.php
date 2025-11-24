<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "financial_literacy";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $course_type = isset($_POST['course_type']) ? (int)$_POST['course_type'] : 0;

    // Validate course selection
    if ($course_type < 1 || $course_type > 2) {
        $message = "Please select a course package";
    } else {
        // Check if email exists
        $sql_check = "SELECT id FROM users WHERE email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $message = "This email is already registered.";
        } else {
            // Insert new user with course type
            $sql = "INSERT INTO users (name, email, password, course_num) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $name, $email, $password, $course_type);

            if ($stmt->execute()) {
                $message = "Registration successful! You can now log in.";
            } else {
                $message = "Error during registration: " . $conn->error;
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
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f4f7fa;
        }

        .navbar {
            background-color: #1a832f !important;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            color: white !important;
            font-weight: 600;
        }

        .nav-link {
            color: white !important;
            margin: 0 15px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #a8d76f;
        }

        .main-content {
            padding: 40px 20px;
            min-height: calc(100vh - 180px);
        }

        .card-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .btn-primary {
            background-color: #1a832f;
            color: white !important;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0d6422;
            transform: translateY(-2px);
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            margin-bottom: 15px;
        }

        .footer {
            background-color: #1a832f;
            color: white;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .footer a {
            color: white !important;
            text-decoration: none;
            margin: 0 15px;
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: #a8d76f;
        }

        .list-item {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
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
            <div class="col-md-6">
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
                        <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                    <p class="text-center mt-3">
                    Already have an account? <a href="login.php" class="text-primary">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
