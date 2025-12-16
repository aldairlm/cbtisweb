<?php
// Detect environment
$is_local = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['HTTP_HOST'] === '127.0.0.1');

if ($is_local) {
    // Localhost Configuration (XAMPP/WAMP default)
    $servername = "localhost";
    $username   = "root";
    $password   = ""; 
    $dbname     = "cbtis_db"; // Make sure this matches your local DB name
} else {
    // AwardSpace Configuration
    $servername = "fdb1033.awardspace.net";
    $username   = "4693019_cbtis";     
    $password   = "YOUR_AGREED_PASSWORD"; // Reemplaza con la contraseña que elegiste en AwardSpace
    $dbname     = "4693019_cbtis";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4");
?>
