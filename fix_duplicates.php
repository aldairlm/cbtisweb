<?php
include 'db.php';

// Prepare the statement to delete only ONE instance of the specific title
$title = "Inicio de Semestre Feb-Jul 2026";
$sql = "DELETE FROM news WHERE title = ? LIMIT 1";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $title);
    
    if ($stmt->execute()) {
        echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
        echo "<h1 style='color: green;'>¡Corrección Exitosa!</h1>";
        echo "<p>Se ha eliminado una (1) copia de la noticia: <strong>" . htmlspecialchars($title) . "</strong></p>";
        echo "<p>Ahora deberías ver solo una instancia en la página principal.</p>";
        echo "<a href='index.php' style='display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Volver al Inicio</a>";
        echo "</div>";
    } else {
        echo "Error al ejecutar la eliminación: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conn->error;
}

$conn->close();
?>
