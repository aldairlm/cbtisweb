<?php
include 'db.php';

$title = "Inicio de Semestre Feb-Jul 2026";
$content = "Damos la bienvenida a toda la comunidad estudiantil al nuevo ciclo escolar. Les deseamos mucho éxito en sus actividades académicas.";
$image = "https://via.placeholder.com/400x200?text=Inicio+Semestre";
$date = "2026-02-01";

// Check if it exists first
$check = $conn->prepare("SELECT id FROM news WHERE title = ?");
$check->bind_param("s", $title);
$check->execute();
$check->store_result();

if ($check->num_rows == 0) {
    // Insert if not exists
    $stmt = $conn->prepare("INSERT INTO news (title, content, image_url, publish_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $content, $image, $date);
    
    if ($stmt->execute()) {
        echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
        echo "<h1 style='color: green;'>¡Noticia Restaurada!</h1>";
        echo "<p>Se ha vuelto a crear la noticia: <strong>$title</strong></p>";
        echo "<br><a href='index.php'>Volver al Inicio</a>";
        echo "</div>";
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
    echo "<h1 style='color: orange;'>Ya existe</h1>";
    echo "<p>La noticia ya está en la base de datos.</p>";
    echo "<br><a href='index.php'>Volver al Inicio</a>";
    echo "</div>";
}

$conn->close();
?>
