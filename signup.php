<?php
include 'db.php';
session_start();

$error = "";
$success = "";

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validations
    if ($password !== $confirm_password) {
        $error = "Las contraseñas no coinciden.";
    } elseif (strlen($password) < 6) {
        $error = "La contraseña debe tener al menos 6 caracteres.";
    } else {
        // Check if username exists
        $check_sql = "SELECT id FROM users WHERE username = '$username'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            $error = "El nombre de usuario ya está en uso.";
        } else {
            // Hash password and insert
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

            if ($conn->query($insert_sql) === TRUE) {
                $success = "Registro exitoso. Ahora puedes iniciar sesión.";
            } else {
                $error = "Error al registrar: " . $conn->error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - CBTIS</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
        }
        .login-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-header {
            margin-bottom: 30px;
        }
        .login-header i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        .form-control {
            margin-bottom: 20px;
        }
        .btn {
            width: 100%;
        }
        .error-msg {
            color: #721c24;
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        .success-msg {
            color: #155724;
            background-color: #d4edda;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        .login-link {
            margin-top: 20px;
            display: block;
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
        }
        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <i class="fas fa-user-plus"></i>
            <h2>Registrarse</h2>
            <p>Crear nueva cuenta</p>
        </div>

        <?php if($error): ?>
            <div class="error-msg"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if($success): ?>
            <div class="success-msg">
                <?php echo $success; ?>
                <br>
                <a href="login.php" style="font-weight: bold; color: #155724;">Ir a Iniciar Sesión</a>
            </div>
        <?php else: ?>
            <form action="signup.php" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Usuario" required value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirmar Contraseña" required>
                </div>
                <button type="submit" class="btn">Registrarse</button>
            </form>
        <?php endif; ?>
        
        <a href="login.php" class="login-link">¿Ya tienes cuenta? Inicia sesión aquí</a>
    </div>

</body>
</html>
