<?php 
include 'auth_check.php';
include 'header.php'; 
include 'db.php';

$message_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simple validation and insertion logic
    if ($conn) {
        $name = $conn->real_escape_string($_POST['nombre']);
        $email = $conn->real_escape_string($_POST['email']);
        $subject = $conn->real_escape_string($_POST['asunto']);
        $message = $conn->real_escape_string($_POST['mensaje']);

        $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            $message_status = "<div class='alert success'>¡Mensaje enviado con éxito!</div>";
        } else {
            $message_status = "<div class='alert error'>Error: " . $conn->error . "</div>";
        }
    } else {
        $message_status = "<div class='alert error'>Error de conexión a la base de datos.</div>";
    }
}
?>

<section class="page-header">
    <div class="container">
        <h1>Contacto</h1>
        <p>Estamos aquí para escucharte y resolver tus dudas.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Información de Contacto</h3>
                <p>Estamos para atenderte. Visítanos o envíanos un mensaje.</p>
                <br>
                <div class="contact-info-item">
                    <i class="fas fa-map-marked-alt"></i>
                    <div>
                        <h4>Ubicación</h4>
                        <p>Calle Plinio D. Ordoñez 801<br>Col. Hacienda del Topo, General Escobedo, N.L.</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4>Horario de Atención</h4>
                        <p>Lunes a Viernes: 7:00 am - 8:00 pm<br>Sábados: 9:00 am - 1:00 pm</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h4>Teléfonos</h4>
                        <p>Oficina: (55) 1234-5678<br>Servicios Escolares: Ext. 105</p>
                    </div>
                </div>
                
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.3146460677147!2d-100.32049908498424!3d25.82672728360741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662939023594911%3A0xc3f60714781442d!2sCBTis%20258!5e0!3m2!1ses-419!2smx!4v1652399999999!5m2!1ses-419!2smx" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div class="contact-form">
                <h3>Envíanos un Mensaje</h3>
                <?php echo $message_status; ?>
                <form action="contacto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <select id="asunto" name="asunto" class="form-control">
                            <option value="general">Información General</option>
                            <option value="escolares">Servicios Escolares</option>
                            <option value="queja">Quejas o Sugerencias</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn" style="width: 100%;">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
if(isset($conn)) $conn->close();
include 'footer.php'; 
?>
