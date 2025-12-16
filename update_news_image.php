<?php
include 'db.php';

// Update the "Feria de Universidades" news image
$title = "Feria de Universidades 2025";
$new_image = "img/feria_universidad.png";

$sql = "UPDATE news SET image_url = ? WHERE title = ?";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ss", $new_image, $title);
    
    if ($stmt->execute()) {
        $affected_rows = $stmt->affected_rows;
        echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
        echo "<h1 style='color: green;'>¡Actualización Exitosa!</h1>";
        echo "<p>Se actualizó la imagen de la noticia: <strong>$title</strong></p>";
        echo "<p>Filas actualizadas: <strong>$affected_rows</strong></p>";
        echo "<br>";
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
