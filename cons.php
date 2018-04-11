<?php
$user = $_REQUEST["user"];
$pw   = $_REQUEST["pw"];

$userd = base64_decode($user);
$pwd   = base64_decode($pw);

include 'conexion.php';
$query     = "SELECT * FROM users where id='$userd' and pw='$pwd'";
$resultado = $mysqli->query($query);
if ($resultado->num_rows > 0) {

    session_start();

    $_SESSION['nombre_AlgoD'] = $userd;

    //Redirigir al inicio
    header('Location:index123.php');

} else {
    header('Location:error.html');
}
