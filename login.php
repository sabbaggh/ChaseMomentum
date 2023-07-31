<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="estilos/login_estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="fondo">
        <div class="registro">
            <div class="titulo">
                Inicia sesion
            </div>
            <?php
            if (isset($_POST["login"])) {
                $usuario = $_POST["usuario"];
                $contra = $_POST["contra"];
                require_once "database.php";
                $sql = "SELECT * FROM usuarios WHERE usuario =  '$usuario'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if ($user) {
                    if (password_verify($contra, $user["contra"])){
                        session_start();
                        $_SESSION["user"] = $usuario;
                        header("Location: paginaPrincipal.php");
                        die();
                    }
                    else{
                        echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
                    }
                }
                else{
                    echo "<div class='alert alert-danger'>No existe el nombre de usuario</div>";
                }
            }
            ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="contra" placeholder="Contraseña:">
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Iniciar Sesion" name="login">
                </div>
            </form>
        </div>
    </div>
</body>