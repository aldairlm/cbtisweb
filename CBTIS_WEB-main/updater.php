<?php
$files = glob("*.php");

foreach ($files as $file) {
    if ($file == "updater.php") continue;
    
    $content = file_get_contents($file);
    $original_content = $content;
    
    // Replace include paths
    $content = str_replace("include 'includes/", "include '", $content);
    $content = str_replace('include "includes/', 'include "', $content);
    
    // Replace CSS paths (if any leftover)
    $content = str_replace('href="css/estilos.css"', 'href="estilos.css"', $content);
    
    if ($content !== $original_content) {
        file_put_contents($file, $content);
        echo "Updated $file\n";
    }
}
echo "Bulk update complete.\n";
?>
