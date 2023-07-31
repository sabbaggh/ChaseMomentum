<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <title>ChaseMomentum</title>
    <style>
        .boton_contacto {
            font-size: 30px;
            font-family: 'Oswald';
            text-decoration: none;
            color: #ffffff;
            border: 4px solid white;
            padding: 15px;
            transition: 0.5s;
        }

        .boton_contacto:hover {
            background-color: #ffffff;
            color: #161a1d;
        }
    </style>
</head>

<body>
    <nav id="navbar">
        <span id="logo">CHASEMOMENTUM</span>
        <ul>
            <li><a href="paginaPrincipal.php" class="navElemento">Home</a></li>
            <li><a href="contacto.php" class="navElemento">Contact</a></li>
            <li> <a href="about.php" class="navElemento">About</a></li>
            <li><a href="blog/index.php" class="navElemento">Blog</a></li>
            <li><a href="servicios.php" class="navElemento">Services</a></li>
            <li><a href="proyectos/proyectos.php" class="navElemento">Projects</a></li>
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

    <div id="primero">
        <img src="estilos/imagenes/Damwon-LoL.jpg" alt="imagen1" class="imaen1">
        <div class="centro">
            <div class="informacion1">
                La mejor manera para subir de rango
            </div>
            <div class="informacion2">
                SUBE DE RANGO CON LOS MEJORES COACHES DE LA REGION GRACIAS A <span
                    class="logotitulo">CHASEMOMENTUM</span>
            </div>
            <div class="opciones">
                <a href="#info" id="bot_aprende">Aprende mas</a>
                <a href="servicios.php" id="empieza">Empieza ahora</a>
            </div>
        </div>

    </div>
    <div class="info" id="info">
        <div class="contenedor">
            <div class="informacion">
                ¡Bienvenido a <span class="logotitulo">ChaseMomentum</span>, tu destino definitivo para alcanzar la
                grandeza en League of Legends! Somos
                una página web especializada en brindar servicios de coaching personalizados para jugadores de todos los
                niveles que deseen mejorar su rendimiento en el popular juego de estrategia.
            </div>
            <div class="imagenes">
                <img src="estilos/imagenes/coach1.jpg" alt="coach1" class="imagen">
            </div>
        </div>
    </div>

    <div class="xdd">
        <img src="estilos/imagenes/league-of-legends.jpg" class="imaen2">
        <div class="centro2">
            <h1 class="titulo2">
                En <span class="logotitulo">ChaseMomentum </span> , entendemos que el mundo de League of Legends puede
                ser desafiante y competitivo.
            </h1>
        </div>

    </div>

    <div class="info">
        <div class="contenedor">
            <div class="imagenes">
                <img src="estilos/imagenes/main4421.jpeg" alt="imagen2" class="imagen">
            </div>
            <div class="informacionxdd">
                Nuestra plataforma de coaching en línea es fácil de usar y accesible desde cualquier lugar del mundo. Ya
                sea que juegues en la Grieta del Invocador o en cualquier otra modalidad de League of Legends, estamos
                aquí para brindarte el apoyo y la orientación necesarios para que puedas alcanzar tus metas.
            </div>
        </div>
    </div>

    <div class="normal">
        Aprende mas sobre la historia de <span class="logotitulo">ChaseMomentum</span> y cuales son nuestros objetivos,
        vision, mision
        y la experiencia de los miembros de nuestro equipo
        <div style="text-align: center;">
            <br>
            <a href="about.php" class="boton_servicios">About</a>
        </div>
    </div>
    <!--   Tarjetas-->
    <div class="container-card">

        <div class="card">
            <figure>
                <img src="runas\Dark_Harvest.webp">
            </figure>
            <div class="contenido-card">
                <h3>Desata tu potencial</h3>
                <p>Con nuestro servicio de coach descubrirás todo de lo que eres capaz a la vez que aprendes las bases
                    del juego.</p>
            </div>
        </div>

        <div class="card">
            <figure>
                <img src="runas\grasp.webp">
            </figure>
            <div class="contenido-card">
                <h3>Llega más lejos que nunca</h3>
                <p>No importa la división te asesoraremos, desde bronce hasta retador.<br> ¡ Sientete libre de explorar
                    !</p>
            </div>
        </div>

        <div class="card">
            <figure>
                <img src="runas\lethal_tempo.png">
            </figure>
            <div class="contenido-card">
                <h3>Aprende de los mejores</h3>
                <p>Contamos con los mejores jugadores del servidor e incluso con ex profesionales. </p>
            </div>
        </div>

        <div class="card">
            <figure>
                <img src="runas\phase_rush.webp">
            </figure>
            <div class="contenido-card">
                <h3>Experiencia personalizada</h3>
                <p>Nuestros coachs te asesorarán en cada partida, con un formato 1 a 1 que te ayudará a aprender de
                    manera eficiente.</p>
            </div>
        </div>

    </div>
    <!------Fin Tarjetas----->
    <div class="info">
        <div class="contenedor">
            <div class="imagenes">
                <img src="estilos/imagenes/t1-lol-lck-team-members.jpg" alt="imagen2" class="imagen">
            </div>
            <div class="informacionxdd">
                Conoce a nuestro equipo de coaches altamente calificados y aprobados directamente por el servicio de
                moderacion de <span class="logotitulo">ChaseMomentum</span>, solo haz click en el boton para conocer
                sus tarifas.
                <div style="text-align: center;">
                    <br>
                    <a href="servicios.php" class="boton_servicios">Servicios</a>
                </div>

            </div>
        </div>
    </div>
    <div class="xdd">
        <img src="estilos/imagenes/league-of-legends-mmo-release.jpg" class="imaen2">
        <div class="centro2">
            <h1 class="titulo2">
                En <span class="logotitulo">ChaseMomentum</span>, nos enorgullece ofrecer una amplia gama de servicios
                de coaching para satisfacer tus necesidades específicas.
            </h1>
        </div>

    </div>
    <div class="info">
        <div class="contenedor">
            <div class="informacion">
                <span class="logotitulo">ChaseMomentum</span> ahora cuenta con un blog en donde se publican diferentes
                trucos y estrategias para ayudar a mejorar tu rango, ademas se publican las actualizaciones que recibe
                la pagina. Haz click en el siguiente boton para entrar al blog
                <div style="text-align: center;">
                    <br>
                    <a href="blog/index.php" class="boton_servicios">Blog</a>
                </div>
            </div>
            <div class="imagenes">
                <img src="estilos/imagenes/league-of-legends-h2k-2005.jpg" alt="coach1" class="imagen">
            </div>
        </div>
    </div>

    <div class="xdd">
        <img src="estilos/imagenes/visax-QIILbFdUzy4-unsplash.jpg" class="imaen2" style="height: 300px;">
        <div class="centro2">
            <h1 class="contacto">
                Ponte en contacto con nosotros
            </h1>
            <h1 class="titulo3">
                Si tienes dudas o quieres formar parte del equipo, llena el formulario que se muestra a continuacion
            </h1>
            <br><br>
            <a href="contacto.php" class="boton_contacto">Contacto</a>
        </div>

    </div>
    <!--
    <form action="" method="post">
        <div class="form">
            <div class="contenedor1">
                <div id="tituloContacto">
                    Formulario de contacto
                </div>
                <div class="contenedorForm">
                    <div class="izq">
                        <div class="ingreso">
                            <label for="nombre" class="lab">Nombre:</label><br>
                            <input type="text" name="nombre" placeholder="Ingresa tu nombre" class="in">
                        </div>
                        <div class="ingreso">
                            <label for="correo" class="lab">Correo electronico:</label><br>
                            <input type="email" name="correo" placeholder="Ingresa tu correo" class="in">
                        </div>
                        <div class="ingreso">
                            <label for="web" class="lab">Sitio web o red social:</label><br>
                            <input type="url" name="web" placeholder="Ingresa tu sitio web o red social(opcional)"
                                class="in">
                        </div>
                    </div>
                    <div class="der">
                        <div class="ingreso">
                            <label for="telefono" class="lab">Telefono:</label><br>
                            <input type="text" name="telefono" placeholder="Ingresa tu numero de telefono(opcional)"
                                class="in">
                        </div>
                        <div class="ingreso">
                            <label for="mensaje" class="lab">Mensaje:</label><br>
                            <textarea name="mensaje" class="in" id="mensaje"
                                style="height: 190px;resize: none;"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="botonSub" style="text-align: center;">
                    <input type="submit" style="background-color: #fff; padding: 10px;">
                </div>
            </div>
        </div>
    </form>-->

    <div class="footer">
        <span id="logo" style="color: #00b4d8;">CHASEMOMENTUM</span>
        <ul class="iconos">
            <li>Siguenos</li>
            <li><a href=""><img src="iconos/icons8-facebook-25.png" alt=""></a></li>
            <li><a href=""><img src="iconos/icons8-twitter-25.png" alt=""></a></li>
            <li><a href=""><img src="iconos/icons8-linkedin-25.png" alt=""></a></li>
            <li><a href=""><img src="iconos/icons8-youtube-25.png" alt=""></a></li>
        </ul>
        <a href="terminos.php" class="terminos">Terminos legales</a>
    </div>





</body>

</html>
