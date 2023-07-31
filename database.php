<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "chasemomentum";
$conn = mysqli_connect ($hostName,$dbUser,$dbPassword,$dbName);
if (!$conn) {
    die("Ocurrio un error");
}

?>