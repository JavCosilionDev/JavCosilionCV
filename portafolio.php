
<!-- Includes -->
<?php include("layouts/header.php")?>

<style>
    body {
      margin: 0;
      padding: 0;
      background: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      overflow: hidden;
    }

    .contenedor-proyectos {
        width: 100vw;
        height: 87vh;
        margin: 2rem auto;
        overflow-x: scroll;
        display: flex;
        gap: 2rem;
        padding-bottom: 1rem;

        margin-top: 10rem;
        overflow-y: hidden;
        padding: 2rem 0rem 3rem 0rem;
        
    }
    .card {
      flex: 0 0 500px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      scroll-snap-align: start;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }
    .card .image-wrapper {
      width: 100%;
      aspect-ratio: 1 / 1;
      overflow: hidden;
    }
    .card .image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .card .content {
      padding: 1rem;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .card .content h3 {
      margin-bottom: 0.5rem;
      font-size: 1.2rem;
      color: #333;
    }
    .card .content p {
      font-size: 0.9rem;
      color: #666;
      flex: 1;
    }
    .first-card{
        background-color: #f0f0f0;
        border: none;
        box-shadow: none;
        flex: 0 0 200px;
    }
    .last-card{
        background-color: #f0f0f0;
        border: none;
        box-shadow: none;
        flex: 0 0 10px;
    }
    .title-card{
        font-size: 2rem !important;
        font-weight: 600;
    }
</style>

<div class="contenedor-proyectos">

    <div class="card first-card"></div>
    
    <!-- se muestran los 4 primeros -->
    <div class="card">
        <div class="image-wrapper">
            <img src="./assets/img/proyectos/UPPENJAMO/Página principal/HomeGif.gif" alt="Rediseño de Página principal UPPENJAMO">
        </div>
        <div class="content">
            <h3 class="title-card">Página principal UPPE</h3>
            <p>Rediseño completo de la página principal uppenjamo.edu.mx a la cuál se hizo más dinámica y atractiva visualmente, 
                se actualizó el contenido y se agregaron páginas como “Visita virtual”, “eventos”, “promociones”, etc. 
                además de agregar el apartado de “Accesibilidad Web” para mayor inclusividad de usuarios y facilitar el uso.</p>
        </div>
    </div>

    <div class="card">
        <div class="image-wrapper">
            <img src="./assets/img/proyectos/UPPENJAMO/SAP-UPPE/inicioSesionSAPUPPE.JPG" alt="Plataforma SAP-UPPE">
        </div>
        <div class="content">
            <h3 class="title-card">Plataforma SAP-UPPE</h3>
            <p>A partir del sistema base, diseñé junto con el jefe del departamento y la directora de la carrera de Ingeniería en Software, 
                los módulos necesarios para integrar el proceso de enseñanza-aprendizaje a la plataforma SAP-UPPE.</p>
        </div>
    </div>

    <div class="card">
        <div class="image-wrapper">
            <img src="./assets/img/proyectos/Orbal/GrandPet/grandpet6.JPG" alt="Diseño de vistas para grandPet">
        </div>
        <div class="content">
            <h3 class="title-card">Diseño de vistas para GrandPet</h3>
            <p>Durante mis estancias profesionales en la empresa Orbal Technologies, trabajé en el proyecto web para los productos GrandPET de Nu3, 
                donde diseñé junto con mi compañera de equipo el frontend de la página web y lo implementamos utilizando HTML, CSS y JavaScript.</p>
        </div>
    </div>

    <div class="card">
        <div class="image-wrapper">
            <img src="./assets/img/proyectos/Orbal/Mira Business/mira.JPG" alt="Implementación y mejora de funciones en backend">
        </div>
        <div class="content">
            <h3 class="title-card">Implementación y mejora de funciones en backend</h3>
            <p>Colaboré con el equipo de desarrollo para implementar y mejorar muchas de las funciones necesarias para implementar de manera correcta 
                la lógica de negocio del proyecto, fue desarrollado utilizando PHP, JavaScript y consultas SQL.</p>
        </div>
    </div>



    <div class="card hidden">
        <div class="image-wrapper">
            <img src="./assets/img/proyectos/Orbal/El Tiliche/el tiliche.JPG" alt="Imagen 1">
        </div>
        <div class="content">
            <h3 class="title-card">Expansión y mejora del sistema</h3>
            <p>Trabajé como desarrollador backend durante cuatro meses en el proyecto ERP de Auto Partes El Tiliche, enfocándose en la expansión y mejora 
                del sistema mediante la implementación de nuevos módulos utilizando PHP y consultas SQL, reemplazando funciones viejas por unas más eficientes 
                y agregando funciones nuevas.</p>
        </div>
    </div>

    <div class="card hidden">
        <div class="image-wrapper">
            <img src="./assets/img/proyectos/Escolares/predictText/inicioSesion.JPG" alt="Imagen 1">
        </div>
        <div class="content">
            <h3 class="title-card">PredictText (proyecto escolar)</h3>
            <p>Es un programa de escritorio creado con python, puede leer un texto y mostrar los diferentes temas que contiene.</p>
        </div>
    </div>

    <div class="card hidden">
        <div class="image-wrapper">
            <img src="./assets/img/proyectos/Escolares/ecommerce/portafolioWeb1-2.PNG" alt="Proyecto escolar">
        </div>
        <div class="content">
            <h3 class="title-card">Ecommerce (proyecto escolar)</h3>
            <p>Interface gráfica realizada para un proyecto en la universidad con HTML, CSS y JavaScript.</p>
        </div>
    </div>

    <div class="card last-card"></div>
</div>



<!-- //NOTE - footer -->

<?php include("layouts/footer.php")?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.card');
        const contenedorProyectos = document.querySelector('.contenedor-proyectos');

        // 1. Animación inicial 
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__slideInRight');

                obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        cards.forEach(card => observer.observe(card));


        // 2. Scroll horizontal con el mouse + headShake al final

        // let isScrolling = false;
        // const scrollCooldown = 600; // ms entre scrolls
        // const scrollLeftSensitivity = 480; // Pixeles de desplazamiento
        // const scrollRightSensitivity = 430; // Pixeles de desplazamiento

        // contenedorProyectos.addEventListener('mouseover', (e) => {
        //     if (isScrolling) return;
            
        //     const contenedorProyectosRect = contenedorProyectos.getBoundingClientRect();
        //     const mouseX = e.clientX - contenedorProyectosRect.left;
        //     const contenedorProyectosWidth = contenedorProyectosRect.width;
            
        //     // Determinar dirección (80% derecho para scroll derecha, 20% izquierdo para scroll izquierda)
        //     if (mouseX > contenedorProyectosWidth * 0.8) {
        //         contenedorProyectos.scrollBy({ left: scrollLeftSensitivity, behavior: 'smooth' });
        //         isScrolling = true;
        //     } 
        //     else if (mouseX < contenedorProyectosWidth * 0.2) {
        //         contenedorProyectos.scrollBy({ left: -scrollRightSensitivity, behavior: 'smooth' });
        //         isScrolling = true;
        //     }
            
        //     // Cooldown para evitar scroll excesivo
        //     setTimeout(() => isScrolling = false, scrollCooldown);
        // });
        

    });
</script>


<!-- <script>
    document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');
    const contenedorProyectos = document.querySelector('.contenedor-proyectos');
    
    // 1. Animación inicial con contador para el headShake final
    let animatedCards = 0;
    const totalCards = cards.length;
    
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__slideInRight');
                
                // Contar cards animadas
                animatedCards++;
                
                // Cuando todas las cards hayan aparecido
                if (animatedCards === totalCards) {
                    setTimeout(() => {
                        contenedorProyectos.classList.add('animate__animated', 'animate__headShake');
                        
                        // Remover la animación después de ejecutar
                        setTimeout(() => {
                            contenedorProyectos.classList.remove('animate__headShake');
                        }, 1000);
                    }, 500); // Retardo para que sea después de las animaciones
                }
                
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    cards.forEach(card => observer.observe(card));

    // 2. Scroll horizontal con el mouse + headShake al final
    let lastScrollPosition = 0;
    let isScrolling = false;
    const scrollCooldown = 100; // ms entre scrolls
    const scrollSensitivity = 30; // Pixeles de desplazamiento

    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            if (isScrolling) return;
            
            const cardRect = card.getBoundingClientRect();
            const mouseX = e.clientX - cardRect.left;
            const cardWidth = cardRect.width;
            
            // Determinar dirección (80% derecho para scroll derecha, 20% izquierdo para scroll izquierda)
            if (mouseX > cardWidth * 0.8) {
                contenedorProyectos.scrollBy({ left: scrollSensitivity, behavior: 'smooth' });
                isScrolling = true;
            } 
            else if (mouseX < cardWidth * 0.2) {
                contenedorProyectos.scrollBy({ left: -scrollSensitivity, behavior: 'smooth' });
                isScrolling = true;
            }
            
            // Cooldown para evitar scroll excesivo
            setTimeout(() => isScrolling = false, scrollCooldown);
        });
    });

    // Detectar fin del scroll para headShake
    contenedorProyectos.addEventListener('scroll', () => {
        const maxScroll = contenedorProyectos.scrollWidth - contenedorProyectos.clientWidth;
        const currentScroll = contenedorProyectos.scrollLeft;
        const scrollDirection = currentScroll > lastScrollPosition ? 'right' : 'left';
        
        // Detectar cuando se llega al final
        if (
            (scrollDirection === 'right' && currentScroll >= maxScroll - 5) ||
            (scrollDirection === 'left' && currentScroll <= 5)
        ) {
            contenedorProyectos.classList.add('animate__animated', 'animate__headShake');
            
            // Remover la animación después de ejecutar
            setTimeout(() => {
                contenedorProyectos.classList.remove('animate__headShake');
            }, 1000);
        }
        
        lastScrollPosition = currentScroll;
    });
});
</script> -->