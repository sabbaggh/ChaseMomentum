<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos/contacto_estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="fondo">
        <div class="registro">
            <div class="titulo">
                Formulario de contacto
            </div>
            <?php
            if (isset($_POST["submit"])) {
                $nombre = $_POST["nombre"];
                $correo = $_POST["correo"];
                $sitio = $_POST["sitio"];
                $telefono = $_POST["telefono"];
                $mensaje = $_POST["mensaje"];
                $errores = array();
                if (empty($nombre) or empty($correo) or empty($mensaje)) {
                    array_push($errores, "Completa los campos obligatorios");
                }
                if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                    array_push($errores, "Correo no valido");
                }
                if (!empty($sitio)) {
                    if (!filter_var($sitio, FILTER_VALIDATE_URL)) {
                        array_push($errores, "Ingrese una URL valida");
                    }
                }

                require_once "database.php";

                if (count($errores) > 0) {
                    foreach ($errores as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                } else {

                    $sql = "INSERT INTO forms (nombre, correo, sitio, telefono, mensaje) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt, "sssss", $nombre, $correo, $sitio, $telefono,$mensaje);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>Se envio el formulario correctamente</div>";
                    } else {
                        die("Ocurrio un error");
                    }
                }
            }
            ?>
            <form action="contacto.php" method="post">
                <div class="todo">
                    <div class="izq">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="nombre"
                                placeholder="Nombre completo">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" name="correo"
                                placeholder="Correo electronico">
                        </div>
                        <div class="form-group">
                            <input type="url" class="form-control form-control-lg" name="sitio"
                                placeholder="Sitio web o red social(opcional)">
                        </div>
                    </div>
                    <div class="der">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="telefono"
                                placeholder="Numero de telefono(opcional)">
                        </div>
                        <div class="form-group">
                            <textarea name="mensaje" placeholder="Ingresa tu mensaje aqui"
                                style="resize: none;"></textarea>
                        </div>
                    </div>

                </div>
                <div class="botones">
                    <div class="xdd">
                        <a href="paginaPrincipal.php" class="btn btn-secondary btn-lg" role="button">Volver</a>
                    </div>
                    <div class="xdd">
                        <div class="form-btn">
                            <input type="submit" class="btn btn-primary btn-lg" value="Enviar" name="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>