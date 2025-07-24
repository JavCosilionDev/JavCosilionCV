<?php
    include("./controller/session.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Javier's Portfolio</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/iconos/svg/favicon.svg" rel="icon">

        <!-- Fuentes de Google -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Archivos Vendor CSS -->
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Starability.css para agregar estrellas -->
        <link rel="stylesheet" type="text/css" href="assets/css/starability-css/starability-all.css"/>

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- jQuery  -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <!-- select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- Sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- CSS principal -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/estilos.css" rel="stylesheet">
        <link href="assets/css/styles-home.css" rel="stylesheet">

        <!-- icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- <link href="assets/scss/spinner.scss" rel="stylesheet"> -->

        <!-- // SDK MercadoPago.js -->
        <script src="https://sdk.mercadopago.com/js/v2"></script>
    </head>
    <body>

    <style>
    /* Preloader */
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: #ffffff;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .loader {
      width: 40px;
      height: 40px;
      border: 5px solid #ccc;
      border-top-color: #3498db;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Contenido principal (oculto al inicio) */
    #main-content {
      display: none;
      padding: 2rem;
      text-align: center;
    }
    </style>

    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top align-items-center">
        
        <a href="./" class="header-logo">JavDev<span>.</span></a>
        <nav>
            <!-- <a href="./" class="nav-item"><i class="bi bi-house-door-fill"></i> Home</a> -->
            <a href="./cVitae.php" class="nav-item"><i class="bi bi-file-earmark-person-fill"></i> CV</a>
            <a href="./portafolio.php" class="nav-item"><i class="bi bi-briefcase-fill"></i> Portafolio</a>
            <!-- <a href="./contacto.php" class="nav-item"><i class="bi bi-person-lines-fill"></i> Contacto</a> -->
        </nav>
        <!-- <button class="header-btn">Hablemos :)</button> -->

    </header>

