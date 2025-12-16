<?php
include 'db.php';

// Create Users Table if not exists
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);

$username = 'admin';
$password = 'admin123';
$hash = password_hash($password, PASSWORD_DEFAULT);

// Check if admin exists
$check = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($check);

if ($result->num_rows == 0) {
    $insert = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";
    if ($conn->query($insert)) {
        echo "Usuario admin creado exitosamente.";
    } else {
        echo "Error al crear usuario: " . $conn->error;
    }
} else {
    // Update password just in case
    $update = "UPDATE users SET password = '$hash' WHERE username = '$username'";
    $conn->query($update);
    echo "Usuario admin actualizado.";
}

$conn->close();
?>
