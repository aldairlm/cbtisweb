<?php 
include 'auth_check.php';
include 'header.php'; 
?>

<section class="page-header">
    <div class="container">
        <h1>Galería</h1>
        <p>Un recorrido visual por nuestras instalaciones y eventos.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <!-- Gallery Grid -->
        <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
            <!-- Áreas Recreativas -->
            <div class="gallery-item" style="height: 250px; border-radius: 8px; overflow: hidden; position: relative; box-shadow: var(--shadow-sm);">
                <img src="img/areas_recreativas.jpg" alt="Áreas Recreativas" style="width: 100%; height: 100%; object-fit: cover; transition: 0.3s;">
                <div style="position: absolute; bottom: 0; background: rgba(0,0,0,0.5); color: white; width: 100%; padding: 10px; font-size: 14px;">Áreas Recreativas</div>
            </div>

            <!-- CBTIS Images -->
            <div class="gallery-item" style="height: 250px; border-radius: 8px; overflow: hidden; position: relative; box-shadow: var(--shadow-sm);">
                <img src="img/cbtis2.jpeg" alt="Imagen 2" style="width: 100%; height: 100%; object-fit: cover; transition: 0.3s;">
            </div>
            <div class="gallery-item" style="height: 250px; border-radius: 8px; overflow: hidden; position: relative; box-shadow: var(--shadow-sm);">
                <img src="img/cbtis3.jpeg" alt="Imagen 3" style="width: 100%; height: 100%; object-fit: cover; transition: 0.3s;">
            </div>
            <div class="gallery-item" style="height: 250px; border-radius: 8px; overflow: hidden; position: relative; box-shadow: var(--shadow-sm);">
                <img src="img/cbtis4.jpeg" alt="Imagen 4" style="width: 100%; height: 100%; object-fit: cover; transition: 0.3s;">
            </div>
            <div class="gallery-item" style="height: 250px; border-radius: 8px; overflow: hidden; position: relative; box-shadow: var(--shadow-sm);">
                <img src="img/cbtis6.jpeg" alt="Imagen 6" style="width: 100%; height: 100%; object-fit: cover; transition: 0.3s;">
            </div>
            <div class="gallery-item" style="height: 250px; border-radius: 8px; overflow: hidden; position: relative; box-shadow: var(--shadow-sm);">
                <img src="img/cbtis7.jpeg" alt="Imagen 7" style="width: 100%; height: 100%; object-fit: cover; transition: 0.3s;">
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; 
