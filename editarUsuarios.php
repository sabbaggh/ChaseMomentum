<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estilos/registro_estilos.css">
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
                Actualiza tus datos
            </div>
            <?php
            require_once ("database.php");
            if (isset($_POST['submit'])) {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $contra = $_POST['contra'];
                $usuario = $_POST['usuario'];
                $contra_otravez = $_POST["contra_otravez"];
                $contraHash = password_hash($contra, PASSWORD_DEFAULT);
                $id = $_GET["id"];
                $errores = array();
                if (empty($nombre) or empty($correo) or empty($usuario) or empty($contra) or empty($contra_otravez)) {
                    array_push($errores, "Se requieren todos los campos");
                }
                if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                    array_push($errores, "Correo no valido");
                }
                if (strlen($usuario < 6)) {
                    array_push($errores, "El nombre de usuario debe tener por lo menos 6 caracteres");
                }
                if (strlen($contra < 8)) {
                    array_push($errores, "La contraseña debe tener por lo menos 8 caracteres");
                }
                if ($contra !== $contra_otravez) {
                    array_push($errores, "La contraseña no coincide");
                }

                $sql2 = "SELECT * FROM usuarios WHERE correo ='$correo' and id = '$id'";
                $resultado = mysqli_query($conn, $sql2);
                $rowcount = mysqli_num_rows($resultado);
                $sql3 = "SELECT * FROM usuarios WHERE correo ='$correo'";
                $resultado3 = mysqli_query($conn, $sql3);
                $rowcount3 = mysqli_num_rows($resultado3);
                if ($rowcount == 1 or $rowcount3 == 0) {
                    ;
                }
                else {
                    array_push($errores, "Ya existe una cuenta con ese correo");
                }
                $sql1 = "SELECT * FROM usuarios WHERE usuario ='$usuario' and id = '$id'";
                $sql4 = "SELECT * FROM usuarios WHERE usuario ='$usuario'";
                $resultado4 = mysqli_query($conn, $sql4);
                $rowcount4 = mysqli_num_rows($resultado4);
                $resultado1 = mysqli_query($conn, $sql1);
                $rowcount1 = mysqli_num_rows($resultado1);
                if ($rowcount1 == 1 or $rowcount4 == 0) {
                    ;
                }
                else {
                    array_push($errores, "Ya existe una cuenta con ese nombre de usuario");
                }
                if (count($errores) > 0) {
                    foreach ($errores as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                } 
                else {
                    $sql = "UPDATE usuarios SET nombre=?, correo=?, contra=?, usuario=? WHERE id=?";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt,"ssssi", $nombre,$correo,$contraHash,$usuario, $_GET["id"]);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>Editado correctamente</div>";
                    } else {
                        die("Ocurrio un error");
                    }
                }
            }
            $sql = $conn->prepare("SELECT * FROM usuarios WHERE id=?");
            $sql->bind_param("i", $_GET["id"]);
            $sql->execute();
            $result = $sql->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
            $conn->close();
            ?>
            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre completo:"
                        value="<?php echo $row["nombre"] ?>">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="correo" placeholder="Correo electronico:"
                        value="<?php echo $row["correo"] ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario:"
                        value="<?php echo $row["usuario"] ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="contra" placeholder="Contraseña:"
                        value="<?php echo $row["contra"] ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="contra_otravez" placeholder="Repite contraseña:"
                        value="<?php echo $row["contra"] ?>">
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Actualizar" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>