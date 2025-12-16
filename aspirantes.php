<?php 
include 'auth_check.php';
include 'header.php'; 
?>

<section class="page-header">
    <div class="container">
        <h1>Aspirantes</h1>
        <p>Tu futuro comienza aquí. Únete a nuestra comunidad.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row" style="display: flex; gap: 40px; flex-wrap: wrap;">
            <div style="flex: 2; min-width: 300px;">
                <h2>Proceso de Admisión 2026</h2>
                <p>El proceso de ingreso al CBTIS 258 se realiza anualmente. A continuación te presentamos los pasos a seguir para formar parte de nuestra institución.</p>
                
                <div class="step-card" style="margin-top: 30px; background: #fff; padding: 20px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-sm); margin-bottom: 20px;">
                    <h3>1. Pre-registro en Línea</h3>
                    <p>Ingresa al portal de aspirantes y llena tu solicitud con tus datos personales y escolares. Imprime tu ficha de pre-registro.</p>
                    <span style="font-weight: bold; color: var(--primary-color);">Fecha: 1 al 31 de Marzo</span>
                </div>

                <div class="step-card" style="margin-top: 20px; background: #fff; padding: 20px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-sm); margin-bottom: 20px;">
                    <h3>2. Entrega de Documentación</h3>
                    <p>Acude al plantel en la fecha indicada en tu ficha con la documentación requerida (acta de nacimiento, CURP, constancia de estudios).</p>
                    <span style="font-weight: bold; color: var(--primary-color);">Fecha: 15 al 30 de Abril</span>
                </div>

                <div class="step-card" style="margin-top: 20px; background: #fff; padding: 20px; border-left: 4px solid var(--primary-color); box-shadow: var(--shadow-sm); margin-bottom: 20px;">
                    <h3>3. Examen de Admisión</h3>
                    <p>Presenta el examen de evaluación diagnóstica en las instalaciones del plantel. No olvides llevar tu pase de examen.</p>
                    <span style="font-weight: bold; color: var(--primary-color);">Fecha: Junio (Por confirmar)</span>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
