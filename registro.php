<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos/registro_estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="fondo">
        <div class="registro">
            <div class="titulo">
                Ingresa tus datos
            </div>
            <?php
            if(isset($_POST["submit"])){
                $nombre = $_POST["nombre"];
                $correo = $_POST["correo"];
                $usuario = $_POST["usuario"];
                $contra = $_POST["contra"];
                $contra_otravez = $_POST["contra_otravez"];
                $errores = array();

                $contraHash = password_hash($contra, PASSWORD_DEFAULT);
                if(empty($nombre) OR empty($correo) OR empty($usuario) OR empty($contra) OR empty($contra_otravez)){
                    array_push($errores,"Se requieren todos los campos");
                }
                if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                    array_push($errores,"Correo no valido");
                }
                if(strlen($usuario<6)){
                    array_push($errores,"El nombre de usuario debe tener por lo menos 6 caracteres");
                }
                if(strlen($contra<8)){
                    array_push($errores,"La contraseña debe tener por lo menos 8 caracteres");
                }
                if ($contra !== $contra_otravez) {
                    array_push($errores,"La contraseña no coincide");
                }
                require_once "database.php";

                $sql = "SELECT * FROM usuarios WHERE correo ='$correo'";
                $resultado = mysqli_query($conn,$sql);
                $rowcount = mysqli_num_rows($resultado);
                if ($rowcount>0) {
                    array_push($errores, "Ya existe una cuenta con ese correo");
                }

                $sql1 = "SELECT * FROM usuarios WHERE usuario ='$usuario'";
                $resultado1 = mysqli_query($conn,$sql1);
                $rowcount1 = mysqli_num_rows($resultado1);
                if ($rowcount1>0) {
                    array_push($errores, "Ya existe una cuenta con ese nombre de usuario");
                }

                if (count($errores)>0) {
                    foreach ($errores as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }
                else {
                    
                    $sql = "INSERT INTO usuarios (nombre, correo, contra, usuario) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt,"ssss", $nombre,$correo,$contraHash,$usuario);
                        mysqli_stmt_execute($stmt);
                        session_start();
                        $_SESSION["user"] = $usuario;
                        header("Location: paginaPrincipal.php");
                        echo"<div class='alert alert-success'>Te has registrado correctamente</div>";
                    }
                    else {
                        die("Ocurrio un error");
                    }
                }
            }
            ?>
            <form action="registro.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre completo:">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="correo" placeholder="Correo electronico:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="contra" placeholder="Contraseña:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="contra_otravez" placeholder="Repite contraseña:">
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Registrar" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>