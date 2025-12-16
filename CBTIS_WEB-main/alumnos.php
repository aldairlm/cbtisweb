<?php 
include 'auth_check.php';
include 'header.php'; 
?>

<section class="page-header">
    <div class="container">
        <h1>Alumnos</h1>
        <p>Información relevante para tu vida académica.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="about-grid">
            <div>
                <h3><i class="fas fa-calendar-alt"></i> Calendario Escolar</h3>
                <p>Consulta las fechas importantes del ciclo escolar actual: inicio de clases, periodos vacacionales, exámenes parciales y entrega de boletas.</p>
                <br>
                <a href="#" class="btn">Descargar Calendario PDF</a>
            </div>
            <div>
                <h3><i class="fas fa-book-reader"></i> Reglamento Escolar</h3>
                <p>Conoce tus derechos y obligaciones como estudiante del CBTIS. Es importante mantener una convivencia sana y respetuosa dentro del plantel.</p>
                <ul class="requirements-list">
                    <li>Uso correcto del uniforme</li>
                    <li>Asistencia y puntualidad</li>
                    <li>Respeto a las instalaciones</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
