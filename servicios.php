<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="estilos/servicios_estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <div class="primero">
        <div class="texto-img">
            <div class="centro">
                CONOCE A LOS COACHES DE CHASEMOMENTUM Y SUS TARIFAS
            </div>
        </div>
        <div class="coaches">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg">
                        <div class="card bg-dark text-white">
                            <img src="estilos/imagenes/600px-Faker_Worlds_2022_Image_2.jpg" alt="Coach"
                                class="card-img-top cartaImagen">
                            <div class="card-body">
                                <h3 class="card-title">Faker</h3>
                                <div class="rating">
                                    <div class="estrellas">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <img src="estilos/imagenes/1643836357.webp" alt="rango">
                                </div>
                                <p class="roles">Mid,Jungla,Soporte</p>
                                <p class="card-text">
                                <ul class="experiencia">
                                    <li>
                                        Ganador de Worlds 3 veces
                                    </li>
                                    <li>
                                        Jugador profesional
                                    </li>
                                    <li>
                                        Excelentes mecanicas
                                    </li>
                                </ul>
                                </p>
                                <div class="abajo">
                                    <div class="boton-tarifa">
                                        <div class="boton-contratar">
                                            <a onclick="myFunction()" class="contratar">Contratar</a>
                                        </div>
                                        <div class="tarifa">
                                            $100/hora
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card bg-dark text-white">
                            <img src="estilos/imagenes/ignite.jpg" alt="Coach"
                                class="card-img-top cartaImagen">
                            <div class="card-body">
                                <h3 class="card-title">Ignite</h3>
                                <div class="rating">
                                    <div class="estrellas">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <img src="estilos/imagenes/1643836390.webp" alt="rango">
                                </div>
                                <p class="roles">Mid,Jungla,Soporte,Top</p>
                                <p class="card-text">
                                <ul class="experiencia">
                                    <li>
                                        Gran experiencia en coaching
                                    </li>
                                    <li>
                                        Gran Maestro desdete temporada 3
                                    </li>
                                    <li>
                                        Streamer
                                    </li>
                                </ul>
                                </p>
                                <div class="abajo">
                                    <div class="boton-tarifa">
                                        <div class="boton-contratar">
                                            <a onclick="myFunction()" class="contratar">Contratar</a>
                                        </div>
                                        <div class="tarifa">
                                            $100/hora
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card bg-dark text-white">
                            <img src="estilos/imagenes/h.jpg" alt="Coach"
                                class="card-img-top cartaImagen">
                            <div class="card-body">
                                <h3 class="card-title">H</h3>
                                <div class="rating">
                                    <div class="estrellas">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <img src="estilos/imagenes/1643836390.webp" alt="rango">
                                </div>
                                <p class="roles">Jungla,Soporte</p>
                                <p class="card-text">
                                <ul class="experiencia">
                                    <li>
                                        Bot specialist
                                    </li>
                                    <li>
                                        Trabajador de Bosch
                                    </li>
                                    <li>
                                        Excelentes mecanicas
                                    </li>
                                </ul>
                                </p>
                                <div class="abajo">
                                    <div class="boton-tarifa">
                                        <div class="boton-contratar">
                                            <a onclick="myFunction()" class="contratar">Contratar</a>
                                        </div>
                                        <div class="tarifa">
                                            $100/hora
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="coaches">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg">
                        <div class="card bg-dark text-white">
                            <img src="estilos/imagenes/canyon.jpg" alt="Coach"
                                class="card-img-top cartaImagen">
                            <div class="card-body">
                                <h3 class="card-title">Canyon</h3>
                                <div class="rating">
                                    <div class="estrellas">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <img src="estilos/imagenes/1643836357.webp" alt="rango">
                                </div>
                                <p class="roles">Jungla</p>
                                <p class="card-text">
                                <ul class="experiencia">
                                    <li>
                                        Ganador de Worlds en 2020
                                    </li>
                                    <li>
                                        Jugador profesional
                                    </li>
                                    <li>
                                        Experiencia en coaching
                                    </li>
                                </ul>
                                </p>
                                <div class="abajo">
                                    <div class="boton-tarifa">
                                        <div class="boton-contratar">
                                            <a onclick="myFunction()" class="contratar">Contratar</a>
                                        </div>
                                        <div class="tarifa">
                                            $300/hora
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card bg-dark text-white">
                            <img src="estilos/imagenes/josedeodo.jpg" alt="Coach"
                                class="card-img-top cartaImagen">
                            <div class="card-body">
                                <h3 class="card-title">Josedeodo</h3>
                                <div class="rating">
                                    <div class="estrellas">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <img src="estilos/imagenes/1643825856.webp" alt="rango">
                                </div>
                                <p class="roles">Jungla,Soporte,Top,Mid</p>
                                <p class="card-text">
                                <ul class="experiencia">
                                    <li>
                                        Ganador de la LLA
                                    </li>
                                    <li>
                                        Jugador profesional
                                    </li>
                                    <li>
                                        3 años de experiencia en coaching
                                    </li>
                                </ul>
                                </p>
                                <div class="abajo">
                                    <div class="boton-tarifa">
                                        <div class="boton-contratar">
                                            <a onclick="myFunction()" class="contratar">Contratar</a>
                                        </div>
                                        <div class="tarifa">
                                            $100/hora
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card bg-dark text-white">
                            <img src="estilos/imagenes/seiya.webp" alt="Coach"
                                class="card-img-top cartaImagen">
                            <div class="card-body">
                                <h3 class="card-title">Seiya</h3>
                                <div class="rating">
                                    <div class="estrellas">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <img src="estilos/imagenes/1643836357.webp" alt="rango">
                                </div>
                                <p class="roles">Mid,Jungla,Soporte</p>
                                <p class="card-text">
                                <ul class="experiencia">
                                    <li>
                                        Ganador de la LLA
                                    </li>
                                    <li>
                                        Streamer
                                    </li>
                                    <li>
                                        Excelentes mecanicas
                                    </li>
                                </ul>
                                </p>
                                <div class="abajo">
                                    <div class="boton-tarifa">
                                        <div class="boton-contratar">
                                            <a onclick="myFunction()" class="contratar">Contratar</a>
                                        </div>
                                        <div class="tarifa">
                                            $100/hora
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <script>
        function myFunction() {
            <?php
            if (isset($_SESSION["user"])) {
                echo 'window.open("agendar.php","_self")';
            } else
                echo 'alert("Debes iniciar sesion antes de poder contratar a un coach")';
            ?>
        }
    </script>

</body>
