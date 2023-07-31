<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="estilos/about_estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
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
            echo"<ul class=inicios>
            <li id=nombreUsuario>$nombre_usuario</li>
            <li><a href=logout.php id=logout>Cerrar Sesion</a></li>
            </ul>";
        }
        else{
            echo"<ul class='inicios'>
            <li><a href='login.php' id='login'>Login</a></li>
            <li><a href='registro.php' id='register'>register</a></li></ul>";
        }
        ?>
    </nav>
    <div id="primero">
        <img src="estilos/imagenes/mahdi-bafande-AvStx5gPtTE-unsplash.jpg" alt="imagen1" class="imaen1">
        <div class="centro">Quienes somos?</div>
        <div class="br">
            CHASEMOMENTUM
        </div>
    </div>
    <div class="historia">
        <div class="aspiracion">
            Nuestra aspiración en ChaseMomentum es convertirnos en el socio de confianza y referencia definitiva para
            jugadores de League of Legends en su búsqueda por alcanzar la grandeza en el juego.
        </div>
        <div class="parrafo">
            Hace algunos años, un grupo de apasionados jugadores de League of Legends se reunió con un objetivo en
            común: ayudar a otros jugadores a alcanzar su máximo potencial en el juego. Estos jugadores, que habían
            experimentado de primera mano los desafíos y las emociones del competitivo de League of Legends, sabían que
            podían marcar la diferencia compartiendo su conocimiento y experiencia con otros.
            <br><br>
            Así nació ChaseMomentum, una empresa especializada en brindar servicios de coaching personalizados para
            jugadores de League of Legends. Desde el principio, el enfoque de la empresa fue proporcionar una
            experiencia de coaching de alta calidad, centrada en las necesidades individuales de cada jugador. El equipo
            fundador se dedicó a reclutar entrenadores expertos, jugadores de alto nivel que habían alcanzado logros
            notables en el juego. Estos entrenadores eran no solo hábiles jugadores, sino también excelentes
            comunicadores y educadores, capaces de transmitir sus conocimientos de manera efectiva.
            <br><br>
            A medida que ChaseMomentum crecía, la reputación de la empresa también crecía. Los jugadores de todos los
            niveles acudían a ChaseMomentum en busca de orientación y apoyo para mejorar su juego. La empresa se destacó
            por su enfoque personalizado y su compromiso de ayudar a cada jugador a alcanzar sus metas individuales. Los
            testimonios de los clientes satisfechos comenzaron a multiplicarse, lo que impulsó aún más el crecimiento de
            la empresa.
            <br><br>
            Con el tiempo, ChaseMomentum se convirtió en una referencia global en servicios de coaching de League of
            Legends. La empresa expandió su equipo de entrenadores y diversificó su oferta de servicios para satisfacer
            las diversas necesidades de la comunidad de jugadores. No solo se centraron en el desarrollo individual de
            los jugadores, sino que también ofrecieron programas grupales, análisis de partidas y orientación
            estratégica para ayudar a los jugadores a comprender mejor el juego en su totalidad.
            <br><br>
            La comunidad de ChaseMomentum creció y se convirtió en un lugar donde los jugadores podían conectarse,
            aprender y crecer juntos. La empresa organizó eventos, torneos y transmisiones en vivo para fomentar la
            interacción entre los jugadores y promover un ambiente de camaradería. ChaseMomentum se convirtió en un
            referente no solo por su expertise en el juego, sino también por su compromiso con la comunidad y su pasión
            por impulsar el crecimiento de los jugadores.
            <br><br>
            Hoy en día, ChaseMomentum sigue siendo un líder en la industria del coaching de League of Legends. La
            empresa continúa evolucionando y adaptándose a medida que el juego y la comunidad cambian. Su compromiso de
            proporcionar servicios de coaching de la más alta calidad, con entrenadores expertos y personalizados, sigue
            siendo la piedra angular de su éxito. ChaseMomentum sigue siendo un faro de esperanza y crecimiento para los
            jugadores de League of Legends que desean alcanzar la grandeza en el juego y trascender los límites de sus
            habilidades.
        </div>
    </div>
    <!--Parte mision y vision -->
    <div class="xdd" style="margin-top: 0;">
        <img src="estilos/imagenes/ezreal.jpg" alt="Fondo" class="imaen3">
        <div class="centro2">
            <div class="contenedormv">
                <div class="izq">
                    <div class="titulo">Vision</div>
                    En ChaseMomentum, nuestra visión es convertirnos en la referencia global en servicios de coaching de
                    League of Legends. Nos esforzamos por ser reconocidos como la plataforma líder y confiable que los
                    jugadores de todos los niveles acuden en busca de orientación y apoyo para mejorar su juego.
                    Aspiramos a construir una comunidad vibrante y solidaria, donde los jugadores puedan conectarse,
                    aprender y crecer juntos, estableciendo un estándar de excelencia en el mundo de los eSports.
                    Nuestra visión es ser una fuerza impulsora en el crecimiento y el éxito de los jugadores de League
                    of Legends en todo el mundo.
                </div>
                <div class="der">
                    <div class="titulo">
                        Mision
                    </div>
                    Nuestra misión en ChaseMomentum es brindar a los jugadores de League of Legends las herramientas, el
                    conocimiento y el apoyo necesarios para alcanzar su máximo potencial en el juego. Nos comprometemos
                    a ofrecer servicios de coaching de alta calidad, personalizados y adaptados a las necesidades
                    individuales de nuestros clientes. Buscamos impulsar el crecimiento y el desarrollo de cada jugador,
                    ayudándolos a mejorar sus habilidades, aumentar su confianza y lograr resultados excepcionales en el
                    competitivo de League of Legends.
                </div>
            </div>
        </div>
    </div>
    <!--Fin de mision y vision-->
    <!--Objetivos-->
    <div class="contenedormv" style="margin-top: 75px; margin-bottom: 75px;">
        <div class="izq" style="border-right: none;">
            <div class="titulo" style="color: #fff;">Objetivos</div>
            <ol>
                <li><span class="bolded">Proporcionar servicios de coaching de alta calidad:</span> Nuestro objetivo
                    principal es ofrecer servicios de coaching personalizados y de alta calidad para jugadores de League
                    of Legends. Nos esforzamos por brindar a nuestros clientes una experiencia de coaching enriquecedora
                    y efectiva que los ayude a mejorar sus habilidades, aumentar su confianza y alcanzar sus metas en el
                    juego.</li>
                <li><span class="bolded">Impulsar el crecimiento y desarrollo de los jugadores:</span> Queremos ser una
                    fuerza impulsora en el crecimiento y desarrollo de los jugadores de League of Legends. Nuestro
                    objetivo es ayudar a los jugadores a superar obstáculos, adquirir nuevas habilidades y
                    conocimientos, y alcanzar un nivel de juego excepcional. Nos comprometemos a proporcionar recursos,
                    estrategias y apoyo continuo para ayudar a los jugadores a desbloquear su verdadero potencial.</li>
                <li><span class="bolded">Mejorar constantemente nuestros servicios:</span> Buscamos mejorar y optimizar
                    continuamente nuestros servicios de coaching. Escuchamos los comentarios de nuestros clientes y nos
                    esforzamos por implementar mejoras basadas en sus necesidades y sugerencias. Nuestro objetivo es
                    proporcionar una experiencia de coaching cada vez más efectiva, personalizada y satisfactoria para
                    todos nuestros clientes.</li>
            </ol>
        </div>
        <div class="der">
            <div class="titulo">
                Mision
            </div>
            <ol start="4">
                <li><span class="bolded">Construir una comunidad sólida y vibrante:</span> Deseamos crear y mantener una
                    comunidad sólida y vibrante de jugadores de League of Legends. Nuestro objetivo es brindar un
                    espacio donde los jugadores puedan conectarse, aprender y crecer juntos. Organizaremos eventos,
                    torneos y actividades interactivas para fomentar la interacción entre los jugadores y promover un
                    ambiente de camaradería.</li>
                <li><span class="bolded">Mantenernos a la vanguardia del conocimiento y la estrategia del juego:</span>
                    Como empresa especializada en coaching de League of Legends, nos comprometemos a mantenernos
                    actualizados con los cambios en el juego, las estrategias emergentes y las tendencias del
                    competitivo. Nuestro objetivo es ser líderes en conocimiento y ofrecer a nuestros clientes las
                    últimas técnicas y estrategias para ayudarlos a tener éxito en el juego.</li>
                <li><span class="bolded">Expandir nuestra presencia global:</span> Buscamos expandir nuestra presencia y
                    alcance a nivel mundial. Queremos ser reconocidos como la principal plataforma de coaching de League
                    of Legends en diferentes regiones y países. Nuestro objetivo es llegar a más jugadores apasionados y
                    ofrecerles nuestros servicios de coaching de calidad, sin importar dónde se encuentren en el mundo.
                </li>
            </ol>
        </div>
    </div>
    <!--Fin Objetivos-->
    <!--Equipo-->
    <div class="texto-img">
        <div class="titulo-img">
            Conoce al equipo a cargo de ChaseMomentum
        </div>
    </div>
    <div class="info">
        <div class="contenedor">
            <div class="informacion">
                <div class="nombres">
                    Kim Chaewon - CEO y Fundadora
                </div>
                Kim Chaewon es una apasionada jugadora de League of Legends y la visionaria detrás de ChaseMomentum. Con
                una sólida trayectoria en el ámbito de los eSports, Kim Chaewon ha liderado el crecimiento y el
                desarrollo de la empresa desde su fundación. Su visión es proporcionar a los jugadores una experiencia
                de coaching excepcional y construir una comunidad sólida en torno a ChaseMomentum. Como mujer líder en
                la industria de los juegos, Kim Chaewon es un modelo a seguir para otras mujeres interesadas en los
                eSports y está comprometida en fomentar la diversidad e inclusión en el ámbito competitivo de League of
                Legends.
            </div>
            <div class="imagenes">
                <img src="estilos/imagenes/6b0a9153-16ec-4693-93ff-b235be5633a3.jpg" alt="coach1" class="imagen">
            </div>
        </div>
    </div>
    <div class="info">
        <div class="contenedor">
            <div class="imagenes">
                <img src="estilos/imagenes/!.jpg" alt="imagen2" class="imagen">
            </div>
            <div class="informacionxdd">
                <div class="nombres">Huh Yunjin - Directora de Operaciones</div>
                Con más de 10 años de experiencia en la gestión de proyectos y operaciones, Huh Yunjin es la responsable
                de garantizar el funcionamiento fluido de ChaseMomentum. Su enfoque en la eficiencia y la calidad
                asegura que todos los aspectos de la empresa estén en perfecta sincronización, desde la programación de
                sesiones de coaching hasta la satisfacción de nuestros clientes.
            </div>
        </div>
    </div>
    <div class="info">
        <div class="contenedor">
            <div class="informacion">
                <div class="nombres">
                    Nakamura Kazuha - Gerente de Recursos Humanos
                </div>
                Kazuha Nakamura es una experta en recursos humanos con una amplia experiencia en la gestión del talento
                y el desarrollo del personal. Como Gerente de Recursos Humanos en ChaseMomentum, su objetivo es reclutar
                y retener a los mejores profesionales del sector. Kazuha se asegura de que nuestro equipo esté motivado,
                comprometido y en constante crecimiento, creando un ambiente de trabajo positivo y colaborativo.
            </div>
            <div class="imagenes">
                <img src="estilos/imagenes/! (1).jpg" alt="coach1" class="imagen">
            </div>
        </div>
    </div>
    <div class="info">
        <div class="contenedor">
            <div class="informacion">
                <div class="nombres">
                    Miyawaki Sakura - Administradora de Sistemas
                </div>
                Miyawaki Sakura es nuestra administradora de sistemas altamente capacitada y responsable de mantener
                nuestras plataformas tecnológicas en óptimas condiciones. Con su experiencia en infraestructura y
                gestión de redes, Sakura garantiza que nuestros servicios de coaching en línea sean seguros, estables y
                accesibles para nuestros clientes.
            </div>
            <div class="imagenes">
                <img src="estilos/imagenes/! (2).jpg" alt="coach1" class="imagen">
            </div>
        </div>
    </div>
    <div class="info">
        <div class="contenedor">
            <div class="imagenes">
                <img src="estilos/imagenes/eunchae_ le sserafim _ ‘unforgiven’ comeback _ family picture.jpg"
                    alt="imagen2" class="imagen">
            </div>
            <div class="informacionxdd">
                <div class="nombres">Hong Eunchae - Desarrolladora de Software</div>
                Hong Eunchae es una talentosa desarrolladora de software con experiencia en la creación y mejora de
                aplicaciones personalizadas. Su conocimiento en lenguajes de programación y desarrollo web nos permite
                mantener una plataforma de coaching en línea robusta y amigable para nuestros usuarios. Eunchae trabaja
                en colaboración con el equipo para implementar nuevas funcionalidades y mejorar constantemente la
                experiencia de nuestros clientes.
            </div>
        </div>
    </div>
    <!--Fin equipo-->
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
</body>
