<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>CBTIS 258</h3>
                <p>Formando técnicos profesionales con valores y excelencia académica para el futuro de México.</p>
                <br>
                <div class="social-links">
                    <a href="#" style="color: white; margin-right: 15px;"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" style="color: white; margin-right: 15px;"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" style="color: white;"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#oferta">Oferta Educativa</a></li>
                    <li><a href="#servicios">Servicios Escolares</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Contacto</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-map-marker-alt"></i> Av. Tecnológico #123, Col. Centro</li>
                    <li><i class="fas fa-phone"></i> (55) 1234-5678</li>
                    <li><i class="fas fa-envelope"></i> contacto@cbtis-ejemplo.edu.mx</li>
                    <li><i class="fas fa-clock"></i> Lun - Vie: 7:00 - 20:00</li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> CBTIS 258. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script>
    // Simple Mobile Menu Script
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    });

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }));
</script>

</body>
</html>
