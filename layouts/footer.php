<footer>
    <!-- no hay ;) -->
</footer>

<!-- boton para regresar el inicio -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- boton whatsapp -->
<a href="https://wa.me/3521254601" class="whatsapp-button shadow" target="_blank">
    <i class="bi bi-whatsapp" style="top: 0; left: 1rem; position: absolute;"></i>
</a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->

<script src="assets/js/main.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="assets/js/all.min.js"></script>
<script src="assets/js/myscript.js"></script>

<!-- funciones generales -->
<script src="assets/js/funciones.js"></script>

<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- inicializacion de tooltips bootstrap -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>

<!-- preloader -->
<script>
    // Esperar a que todo cargue
    window.addEventListener('load', () => {
      const preloader = document.getElementById('preloader');
      const content = document.getElementById('main-content');

      preloader.style.display = 'none';
      content.style.display = 'block';
    });
</script>

</body>
</html>
