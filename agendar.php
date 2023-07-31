<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location: servicios.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar sesion</title>
    <link rel="stylesheet" href="estilos/agendar_estilos.css">
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
                Completa los campos para generar una sesion con el coach
            </div>
            <?php
            if (isset($_POST["submit"])) {
                $nombre = $_POST["nombreInvocador"];
                $correo = $_POST["correo"];
                $telefono = $_POST["telefono"];
                $comentarios = $_POST["comentarios"];
                $errores = array();

                if (empty($nombre) or empty($correo) or empty($_POST["division"])) {
                    array_push($errores, "Se dejaron en blanco campos requeridos");
                }
                if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                    array_push($errores, "Correo no valido");
                }
                if (count($errores) > 0) {
                    foreach ($errores as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }
                /*else {
                    
                    $sql = "INSERT INTO usuarios (nombre, correo, contra, usuario) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $contraHash, $usuario);
                        mysqli_stmt_execute($stmt);
                        session_start();
                        $_SESSION["user"] = $usuario;
                        header("Location: paginaPrincipal.php");
                        echo "<div class='alert alert-success'>Te has registrado correctamente</div>";
                    } else {
                        die("Ocurrio un error");
                    }
                }*/else {
                    echo "<div class='alert alert-success'>Se agendo la cita con exito. El coach se pondra en contacto contigo a la brevedad</div>";
                }
            }
            ?>
            <form action="agendar.php" method="post">
                <div class="fila">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Nombre de Invocador"
                                name="nombreInvocador">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control form-control-lg"
                                placeholder="Correo electronico donde el coach te contactara" name="correo">
                        </div>
                    </div>
                </div>
                <div class="fila">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Numero de telefono(opcional)" name="telefono">
                        </div>
                        <div class="col">
                            <select class="form-control form-control-lg" name="division">
                                <option value="" disabled selected>Selecciona tu division</option>
                                <option value="hierro">Hierro</option>
                                <option value="bronce">Bronce</option>
                                <option value="plata">Plata</option>
                                <option value="oro">Oro</option>
                                <option value="platino">Platino</option>
                                <option value="diamante">Diamante</option>
                                <option value="maestro">Maestro</option>
                                <option value="gmaestro">Gran Maestro</option>
                                <option value="challenger">Challenger</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="fila">
                    <div class="form-row">
                        <div class="col">
                            <textarea class="form-control form-control-lg"
                                placeholder="Instrucciones adicionales para el coach(opcional)"
                                name="comentarios"></textarea>
                        </div>
                    </div>
                </div>
                <div class="fila2">
                    <div class="form-row">
                        <div class="col">
                            <a href="servicios.php" class="btn btn-info btn-block" role="button">Vover</a>
                        </div>
                        <div class="col">
                            <div class="form-btn">
                                <input type="submit" class="btn btn-primary btn-block" value="Agendar sesion" name="submit">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>