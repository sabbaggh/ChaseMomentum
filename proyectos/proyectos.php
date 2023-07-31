<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">

  <title>Proyectos</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
    rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

</head>

<body>
<nav id="navbar">
        <span id="logo">CHASEMOMENTUM</span>
        <ul>
            <li><a href="../paginaPrincipal.php" class="navElemento">Home</a></li>
            <li><a href="../contacto.php" class="navElemento">Contact</a></li>
            <li> <a href="../about.php" class="navElemento">About</a></li>
            <li><a href="../blog/index.php" class="navElemento">Blog</a></li>
            <li><a href="../servicios.php" class="navElemento">Services</a></li>
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

  <!-- slider section -->
  <section class=" slider_section">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_box">
            <div class="fixed_company-detail">
              <p>
                ChaseMomentum
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2>
                  Somos familia
                </h2>
                <h1>
                  Somos ChaseMomentum
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  Te invitamos a crecer con nosotros, conoce más de nuestras ambiciones y nuestros proyectos<br><b>"Jamás uno sin el otro"</b>
                </p>
              </div>
            </div>
          </div>
        </div>
  </section>

  <!-- end slider section -->

  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/worlds.png" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="welcome_detail" style="color:white ;">
            <h2>
              "Hasta las puertas más pesadas pueden ser abiertas"
            </h2>
            <p>
              En ChaseMomentum trabajamos duro cada día para seguir creciendo y así brindar el mejor servicio y experiencia a nuestros
              clientes, en esta página verás un poco más de nuestros logros conseguidos y por conseguir.
            </p>
            <div class="welcome_detail-btn">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end welcome section -->



  <!-- story section -->

  <section class="layout_padding story_section">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/equipo.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              Vamos por todo
            </h3>
            <h2>
              Equipo competitivo de ChaseMomentum
            </h2>
            <p>
              Permíteme presentarte a nuestro equipo promesa de League of Legends, un grupo de jugadores excepcionales que poseen 
              un talento y una pasión innegables por el juego. Con un enfoque dedicado en mejorar constantemente y alcanzar la cima,
               este equipo muestra un potencial ilimitado.Este equipo promesa está destinado a dejar 
               una huella en el escenario competitivo de League of Legends. <br><b>"Lucharé, fracasare pero rendirme es un privilegio que no tengo"</b>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/escom.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              Apoyamos los jóvenes talentos
            </h3>
            <h2>
              Creación de un equipo para ligas universitarias
            </h2>
            <p>
              Estamos emocionados de presentar la creación de nuestro nuevo equipo para las ligas universitarias de 
              League of Legends. Nuestro objetivo es reunir a estudiantes apasionados por el juego y proporcionarles una 
              plataforma para competir a nivel universitario. A través de entrenamientos intensivos, estrategias innovadoras y un ambiente de apoyo, nos esforzamos 
               por formar jugadores destacados y alcanzar el éxito en las competiciones universitarias. ¡Únete a nosotros y sé 
               parte de esta emocionante aventura mientras nos abrimos paso hacia la victoria!
            </p>
          </div>
        </div>
      </div>
    </div>
     
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/cup.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              Forjando campeones
            </h3>
            <h2>
              Jugadores excepcionales dentro de nuestras filas
            </h2>
            <p>
              Dentro de ChaseMomentum hemos tenido el placer de trabajar con jugadores que gracias a nuestros servicios 
              lograron alcanzar el máximo nivel, podemos decir con orgullo que estos jugadores fueron un proyecto creado 
              y guiado por nuestros coaches.
              <br>¡Tu también puedes ser uno de estos jugadores!
              <br><b>"Los vencedores son los únicos autores de la historia. Es hora de escribir nuestro capítulo"</b>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/team.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              ¿Ya tienes un equipo de Esports? 
            </h3>
            <h2>
              Servicio de coach para equipos competitivos
            </h2>
            <p>
              Contamos con un servicio especial para equipos ya creados donde nos comprometemos a proporcionar un ambiente de aprendizaje positivo y motivador,
              donde cada jugador pueda desarrollar sus fortalezas, superar obstáculos y perfeccionar su juego. 
              Con nuestro enfoque integral, técnico y emocional, estamos aquí para ayudarte a alcanzar tus metas competitivas 
              y destacarte en el escenario de los esports. ¡Únete a nosotros y descubre cómo llevar tu equipo al siguiente nivel!
              <br><b>"Los exploradores auténticos siguen la brújula de su corazón"</b>
            </p>
          </div>
        </div>
      </div>
    </div>


  </section>

  
  <!-- end story section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>

  <script>
    $(".nav_search-btn").click(function () {
      if ($(".nav_search-input").hasClass("d-none")) {
        event.preventDefault();
        $(".nav_search-input")
          .animate({
              left: "-1000px"
            },
            "1000000"
          )
          .removeClass("d-none");
      } else {
        $(".nav_search-input")
          .animate({
              left: "0px"
            },
            "1000000"
          )
          .addClass("d-none");
      }
    });
  </script>
  <div class="footer">
        <span id="logo" style="color: #00b4d8;">CHASEMOMENTUM</span>
        <ul class="iconos">
            <li>Siguenos</li>
            <li><a href=""><img src="../iconos/icons8-facebook-25.png" alt=""></a></li>
            <li><a href=""><img src="../iconos/icons8-twitter-25.png" alt=""></a></li>
            <li><a href=""><img src="../iconos/icons8-linkedin-25.png" alt=""></a></li>
            <li><a href=""><img src="../iconos/icons8-youtube-25.png" alt=""></a></li>
        </ul>
        <a href="../terminos.php" class="terminos">Terminos legales</a>
    </div>
</body>

</html>