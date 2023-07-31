<?php
session_start();
?>
<!DOCTYPE html>

<html lang="">

<head>
<title>Blog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../estilos/styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
<link href="estilos/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>


<!-- Top Background Image Wrapper -->
<nav id="navbar">
        <span id="logo">CHASEMOMENTUM</span>
        <ul>
            <li><a href="../paginaPrincipal.php" class="navElemento">Home</a></li>
            <li><a href="../contacto.php" class="navElemento">Contact</a></li>
            <li> <a href="../about.php" class="navElemento">About</a></li>
            <li><a href="../blog/index.php" class="navElemento">Blog</a></li>
            <li><a href="../servicios.php" class="navElemento">Services</a></li>
            <li><a href="../proyectos/proyectos.php" class="navElemento">Projects</a></li>
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
<div class="bgded overlay" style="background-image:url('../runas/jonia.jpg ');"> 

  </section>


  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      
      <p>Blog ChaseMomentum</p>
      <h3 class="heading">Últimas noticias</h3>
      <p>Enterate de las últimas actualizaciones, logros de nuestros coaches y como trabaja esta gran familia</p>
      
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group">
        <li class="one_third">
          <figure><a><img src="images/coach_juan.jpg" alt="" style ="width:348px; height: 220px  ; "></a>
            <figcaption>
              <h6 class="heading">Increible coach</h6>
              <p>Con tan solo 400 victorias y 700 horas de juego Juan Sabbagh ha conseguido salir de bronce, ¡Felicidades!</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a><img src="../runas/retador.png" alt="" style ="width:348px; height: 220px; "></a>
            <figcaption>
              <h6 class="heading">Ahora es más fácil llegar a retador</h6>
              <p>Después del último parche ahora solo requerimos 1000 puntos de liga en vez de 1500.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a><img src="../runas/aniversario.jpg" alt="" style ="width:348px; height: 220px; "></a>
            <figcaption>
              <h6 class="heading">¡ Feliz Aniversario !</h6>
              <p>Gracias a tu apoyo ChaseMomentum festeja 1 año ayudando a todos los retadores del mundo, checa constantemente nuestra página para próximas sorpresas.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a><img src="../runas/faker.jpg" alt="" style ="width:348px; height: 220px; "></a>
            <figcaption>
              <h6 class="heading"> ¡ Feliz cumpleaños al mejor de todos !</h6>
              <p>Nuestro mejor coach celebra su cumpleaños número 27, todo el equipo de ChaseMomentum le manda un abrazo y muchas felicitaciones.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a><img src="../estilos/imagenes/cris.jpg" alt="" style ="width:348px; height: 220px; "></a>
            <figcaption>
              <h6 class="heading">Empiezan las clases</h6>
              <p>Nuestro querido coach Cristian empezará con streams en la plataforma twitch para ayudarnos a mejorar y aprender de manera gratuita.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a><img src="../runas/yas.gif" alt="" style ="width:348px; height: 220px; "></a>
            <figcaption>
              <h6 class="heading"> ¿ Skins gratis ?</h6>
              <p>Con motivo de nuestro primer aniversario regalaremos una skin legendaria a todos los que contraten por lo menos 2 horas de couching  .</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Estadísticas</p>
      <h6 class="heading">Así juegan nuestros mejores coaches</h6>
    </div>
    <ul id="stats" class="nospace group">
      <li><i class="fas fa-id-badge"></i>
        <p><a href="#">+100</a></p>
        <p>Jugadores coacheados <br>con éxito</p>
      </li>
      <li><i class="fas fa-clock"></i>
        <p><a href="#">+2000</a></p>
        <p>Horas de experiencia nos avalan</p>
      </li>
      <li><i class="fas fa-trophy"></i>
        <p><a href="#">35</a></p>
        <p>Trofeos a nivel nacional y mundial</p>
      </li>
      <li><i class="fas fa-check"></i>
        <p><a href="#">5</a></p>
        <p>Verificados en 5 servers</p>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<div class="wrapper coloured">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">¿Aún no te convences?</p>
      <h6 class="heading">Escucha las opiniones de otros jugadores</h6>
    </div>
    <article class="one_half first"><img src="../runas/testigo1.jpg" alt="" style ="width: 200px;height: 200px;">
      <blockquote>Yo siempre fui muy malo en el juego, realmente no sabía ni que hacer pero gracias a ChaseMomentum mejoré demasiado y ahora soy top 1 de LAN .</blockquote>
      <h6 class="heading">Agustín P.</h6>
      <em>Jugador casual</em></article>
    <article class="one_half"><img src="../runas/testigo2.jpg" alt="" style ="width: 200px;height: 200px;">
      <blockquote> Antes de conocer ChaseMomentum pensé seriamente dejar el juego ya que no conseguía subir de división por más que lo intentara, creí que era imposible, sin embargo los coaches me ayudaron y casi de manera milagrosa logré mejorar hasta ser jugador competitivo<br> ¡ Gracias ChaseMomentum !.</blockquote>
      <h6 class="heading">Alejandro V.</h6>
      <em>Jugador competitivo de G2</em></article>
    <!-- ################################################################################################ -->
  </section>
</div>

<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Reseñas de los más grandes</h6>
    </div>
    <ul class="nospace group latest">
      <li class="one_half first">
        <article>
          <div class="excerpt">
            <ul class="nospace meta">
              <li><i class="fas fa-user"></i>Jankos</a></li>
              <li><i class="fas fa-tag"></i>Dueño de G2 Esports</a></li>
            </ul>
            <h6 class="heading">"Excelente para mejorar"</h6>
            <p> "He visto muchos servicios de coach pero ninguno tan personalizado como ChaseMomentum, es una experiencia única que sin duda te hará mejorar"</p>
          </div>
          <time datetime="2045-04-06T08:15+00:00"><strong>06</strong> <em>Apr</em></time>
        </article>
      </li>
      <li class="one_half">
        <article>
          <div class="excerpt">
            <ul class="nospace meta">
              <li><i class="fas fa-user"></i> <a href="#">KatEvolved</a></li>
              <li><i class="fas fa-tag"></i> <a href="#">Streamer de Elo alto</a></li>
            </ul>
            <h6 class="heading">"Realmente me impresionó"</h6>
            <p>"Nunca antes había visto una plataforma tan amigable con el usuario que te propusiera verdaderas estrategias de mejoras y no solo buscaran quitarte todo tu dinero"</p>
          </div>
          <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

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
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>