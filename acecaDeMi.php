
<!-- Includes -->
<?php include("layouts/header.php")?>

<div class="contenedor-info">
    <div class="p-0" style="height: 73% !important;">
        <div class="row g-0 h-100">

            <!-- Panel izquierdo: íconos y etiquetas -->
            <div class="col-3 left-panel">
                <button class="icon-btn mb-4">
                    <i class="bi bi-briefcase"></i>
                    <div class="icon-label">Experiencia Laboral</div>
                </button>

                <button class="icon-btn mb-4">
                    <i class="bi bi-lightbulb"></i>
                    <div class="icon-label">Habilidades</div>
                </button>

                <button class="icon-btn mb-4">
                    <i class="bi bi-folder"></i>
                    <div class="icon-label">Proyectos</div>
                </button>

                <button class="icon-btn mb-4">
                    <i class="bi bi-book"></i>
                    <div class="icon-label">Formación Académica</div>
                </button>

                <button class="icon-btn">
                    <i class="bi bi-pc"></i>
                    <div class="icon-label">Manejo de software</div>
                </button>
            </div>

            <!-- Panel derecho: acordeón con contenido -->
            <div class="col-9 p-4">
                <div class="card p-4" id="infoAccordion">

                    <!-- Trabajos
                    Habilidades
                    Proyectos
                    Formación Académica
                    Manejo de software -->

                    <div class="">
                        <div id="" class="">
                            <div class="">
                                <h5>{{TituloMenu}}</h5>
                                <p>
                                    {{InfoMenu}}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Fin del acordeón -->
            </div>
        </div>
    </div>
</div>

<?php include("layouts/footer.php")?>
