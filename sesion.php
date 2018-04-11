<?php
session_start();
//Validar que exista la variable de sesión del usuario
if (!isset($_SESSION['nombre_AlgoD'])) {
    header('Location:error.html');
} else {
    echo "Bienvenido a tu sesi&oacute;n " . $_SESSION['nombre_AlgoD'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="cerrarsesion.php">Cerrar Sesio&oacute;n</a>
</body>
</html>
