<?php 
include 'header.php'; 
include 'db.php';
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php 
// include 'footer.php'; 
?>

<h1>PHP funciona</h1>
<p>El index sí carga.</p>

<?php
// include 'header.php'; 
// include 'db.php';
?>


<!-- Inicio / Hero Section -->
<section id="inicio">
    <div class="container">
        <div class="hero-content">
            <h1>Bienvenidos al CBTIS 258</h1>
            <p>"Mariano Escobedo de la Peña"</p>
            <a href="oferta.php" class="btn">Conoce Nuestra Oferta</a>
        </div>
    </div>
</section>

<!-- Accesos Rápidos -->
<section class="quick-links-section">
    <div class="container">
        <div class="quick-links">
            <div class="q-link-card">
                <i class="fas fa-bullhorn"></i>
                <h3>Avisos Importantes</h3>
                <p>Consulta los últimos comunicados oficiales.</p>
                <a href="alumnos.php" style="color: var(--primary-color); font-weight: bold;">Ver más &rarr;</a>
            </div>
            <div class="q-link-card">
                <i class="fas fa-newspaper"></i>
                <h3>Noticias Recientes</h3>
                <p>Entérate de lo que sucede en nuestro plantel.</p>
                <a href="#noticias" style="color: var(--primary-color); font-weight: bold;">Ver más &rarr;</a>
            </div>
            <div class="q-link-card">
                <i class="fas fa-laptop-code"></i>
                <h3>Plataforma Virtual</h3>
                <p>Acceso a aulas virtuales y calificaciones.</p>
                <a href="https://www.google.com" target="_blank" style="color: var(--primary-color); font-weight: bold;">Ingresar &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Noticias Highlight -->
<section id="noticias" class="section-padding" style="background-color: var(--light-bg);">
    <div class="container">
        <h2 class="section-title">Noticias Recientes</h2>
        <div class="news-grid">
            <?php
            // Check if connection was successful before querying
            if ($conn) {
                // Fetch more items to ensure we find 3 unique ones
                $sql_news = "SELECT * FROM news ORDER BY publish_date DESC LIMIT 10";
                $result_news = $conn->query($sql_news);

                if ($result_news && $result_news->num_rows > 0) {
                    $shown_titles = array();
                    $count = 0;
                    
                    while($row = $result_news->fetch_assoc()) {
                        // Skip if we already showed a news item with this title
                        if (in_array($row["title"], $shown_titles)) {
                            continue;
                        }
                        
                        // Stop if we have shown 3 items
                        if ($count >= 3) {
                            break;
                        }
                        
                        // Add title to tracking array
                        $shown_titles[] = $row["title"];
                        $count++;

                        echo '<article class="news-card">';
                        echo '  <div class="news-img" style="background-image: url(\'' . $row["image_url"] . '\');"></div>';
                        echo '  <div class="news-content">';
                        echo '      <span class="news-date">' . $row["publish_date"] . '</span>';
                        echo '      <h3>' . $row["title"] . '</h3>';
                        echo '      <p>' . substr($row["content"], 0, 100) . '...</p>';
                        echo '      <a href="#" class="read-more">Leer más...</a>';
                        echo '  </div>';
                        echo '</article>';
                    }
                } else {
                    echo "<p>No hay noticias recientes.</p>";
                }

            } else {
                 echo "<p>No se pudo conectar a la base de datos de noticias.</p>";
            }
            ?>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="alumnos.php" class="btn">Ver Todas las Noticias</a>
        </div>
    </div>
</section>

<?php 
if(isset($conn)) $conn->close();
include 'footer.php'; 
?>
