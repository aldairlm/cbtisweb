<?php 
include 'auth_check.php';
include 'header.php'; 
include 'db.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Oferta Educativa</h1>
        <p>Descubre las carreras técnicas que tenemos para ti.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="specialties-grid">
            <?php
            $sql = "SELECT * FROM specialties";
            if ($conn) {
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="specialty-card">';
                        echo '  <div class="specialty-header">';
                        echo '      <i class="' . $row["icon"] . ' fa-2x"></i>';
                        echo '      <h3>' . $row["name"] . '</h3>';
                        echo '  </div>';
                        echo '  <div class="specialty-body">';
                        echo '      <h4>Perfil de Ingreso</h4>';
                        echo '      <p>' . $row["profile_in"] . '</p>';
                        echo '      <h4>Perfil de Egreso</h4>';
                        echo '      <p>' . $row["profile_out"] . '</p>';
                        echo '      <h4>Campo Laboral</h4>';
                        echo '      <p>' . $row["work_field"] . '</p>';
                        echo '  </div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No hay especialidades disponibles en este momento.</p>";
                }
            } else {
                echo "<p>Error de conexión a la base de datos.</p>";
            }
            ?>
        </div>
    </div>
</section>

<?php 
if(isset($conn)) $conn->close();
include 'footer.php'; 
?>
