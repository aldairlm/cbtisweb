<?php
// Descargar imagen de Unsplash correctamente
$image_url = 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=200&fit=crop';
$local_path = 'img/feria_universidad.jpg';

// Crear carpeta si no existe
if (!is_dir('img')) {
    mkdir('img', 0755, true);
}

// Usar cURL para descargar correctamente
$ch = curl_init($image_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$image_data = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code == 200 && $image_data) {
    if (file_put_contents($local_path, $image_data)) {
        echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
        echo "<h1 style='color: green;'>¡Imagen Descargada Correctamente!</h1>";
        echo "<p>La imagen se ha guardado en: <strong>" . $local_path . "</strong></p>";
        echo "<p><img src='" . $local_path . "' style='max-width: 300px; margin-top: 20px; border-radius: 8px;'></p>";
        echo "<br>";
        echo "<a href='index.php' style='display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Volver al Inicio</a>";
        echo "</div>";
    } else {
        echo "<h1 style='color: red;'>Error al guardar la imagen en la carpeta</h1>";
    }
} else {
    echo "<h1 style='color: red;'>Error al descargar: HTTP " . $http_code . "</h1>";
}
?>
