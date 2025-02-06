<?php
$servername = "sql301.infinityfree.com";
$username = "if0_38237815";
$password = "uNu3usI1StDo8";
$dbname = "if0_38237815_usuariopersona";

$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>