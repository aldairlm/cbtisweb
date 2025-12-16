<?php
include 'db.php';

// Logic: Keep the one with the HIGHEST ID (Newest), Delete all others with same title.
$sql = "DELETE n1 FROM news n1 INNER JOIN news n2 WHERE n1.id < n2.id AND n1.title = n2.title";

if ($conn->query($sql) === TRUE) {
    echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
    echo "<h1 style='color: green;'>¡Limpieza Completa!</h1>";
    echo "<p>Se han eliminado todas las copias antiguas duplicadas.</p>";
    echo "<p>Filas afectadas/eliminadas: " . $conn->affected_rows . "</p>";
    echo "<p>Ahora solo debería quedar UNA copia de cada noticia.</p>";
    echo "<br>";
    echo "<a href='index.php' style='display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Volver al Inicio</a>";
    echo "</div>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
