<?php
include 'db.php';

// Delete ALL news items with this specific title
$title = "Inicio de Semestre Feb-Jul 2026";
$sql = "DELETE FROM news WHERE title = ?";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $title);
    
    if ($stmt->execute()) {
        $count = $stmt->affected_rows;
        echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
        if ($count > 0) {
            echo "<h1 style='color: green;'>¡Eliminado Completamente!</h1>";
            echo "<p>Se han eliminado de forma definitiva <strong>$count</strong> registros con el título:</p>";
            echo "<h3>'$title'</h3>";
        } else {
            echo "<h1 style='color: orange;'>No se encontraron registros</h1>";
            echo "<p>No había ninguna noticia con ese título exacto para borrar.</p>";
        }
        echo "<a href='index.php' style='display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Volver al Inicio</a>";
        echo "</div>";
    } else {
        echo "Error al ejecutar: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conn->error;
}

$conn->close();
?>
