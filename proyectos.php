<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos y clientes</title>
    <link rel="stylesheet" href="estilos/proyectos_estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav id="navbar">
        <span id="logo">CHASEMOMENTUM</span>
        <ul>
            <li><a href="paginaPrincipal.php" class="navElemento">Home</a></li>
            <li><a href="paginaPrincipal.php" class="navElemento">Contact</a></li>
            <li> <a href="about.php" class="navElemento">About</a></li>
            <li><a href="blog.php" class="navElemento">Blog</a></li>
            <li><a href="servicios.php" class="navElemento">Services</a></li>
            <li><a href="proyectos.php" class="navElemento">Projects</a></li>
        </ul>
        <?php
        if (isset($_SESSION["user"])) {
            $nombre_usuario = $_SESSION["user"];
            echo "<ul class=inicios>
            <li id=nombreUsuario>$nombre_usuario</li>
            <li><a href=logout.php id=logout>Cerrar Sesion</a></li>
            </ul>";
        } else {
            echo "<ul class='inicios'>
            <li><a href='login.php' id='login'>Login</a></li>
            <li><a href='registro.php' id='register'>register</a></li></ul>";
        }
        ?>
    </nav>

    <div class="primero">
        <div class="texto-img">
            <div class="titulo-img">
                Proyectos y clientes destacados de ChaseMomentum
            </div>
        </div>
        <div class="carousel-item active">
            <div class="container">
                <h1 class="titulo-slider">Titulo</h1>
                <p class="texto-slider">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta officia, dolore
                    possimus excepturi sint ratione omnis placeat maiores tenetur reprehenderit animi ex ea provident
                    quibusdam consequuntur, ad ipsum aperiam nisi.</p>
            </div>
        </div>
    </div>


    <div class="footer">
        <span id="logo" style="color: #00b4d8;">CHASEMOMENTUM</span>
        <ul class="iconos">
            <li>Siguenos</li>
            <li><a href="#"><img src="iconos/icons8-facebook-25.png" alt=""></a></li>
            <li> <a href="#"><img src="iconos/icons8-instagram-25.png" alt=""></a></li>
            <li><a href="#"><img src="iconos/icons8-twitter-25.png" alt=""></a></li>
            <li><a href="#"><img src="iconos/icons8-linkedin-25.png" alt=""></a></li>
            <li><a href="#"><img src="iconos/icons8-youtube-25.png" alt=""></a></li>
        </ul>
        <a href="terminos.php" class="terminos">Terminos legales</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>