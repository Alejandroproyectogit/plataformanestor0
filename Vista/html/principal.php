<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Vista/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ontour</title>
</head>
<body>
    <header class="header">
        <div class="navbar">
            <div class="logo">
                <img src="Vista/img/nempresa.png">
            </div>
            <ul class="nav-links">
                <li><a href="index.php?accion=principal">Principal</a></li>
                <li><a href="index.php?accion=about-us">Sobre Nosotros</a></li>
                <li><a href="#">Viajes</a></li>
            </ul>
            <a class="btn-contact">Contactanos</a>
            <div class="toggle">
                <a><i class="fa-solid fa-bars"></i></a>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="index.php?accion=principal">Principal</a></li>
            <li><a href="index.php?accion=about-us">Sobre Nosotros</a></li>
            <li><a href="#">Viajes</a></li>
            <li><a class="btn-contact">Contactanos</a></li>
        </div>
    </header>
    <section class="portada">
        <img class="imagen" src="Vista/img/nevado.jpg">
        <h1>Atrevete a soñar</h1>
    </section>
    <section class="sectionVideo">
        <div class="contenedor-video">
            <div class="video">
                <video class="infovideo" autoplay muted loop>
                    <source src="Vista/video/VideoTolima.mp4" type="video/mp4">
                    Tu navegador no soporta la etiqueta de video.
                </video>
            </div>
        </div>
    </section>
    <!--JS-->
    <script src="Vista/js/script.js"></script>
</body>
    
</html>