<?php
include("conexion.php");
session_start();

/*SI LA SESSION  NO ESTA DEFINIDA ME ENVIA A INDEX*/
if (!isset($_SESSION["confirmar"])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>INICIO</title>
    <!--FUENTE LETRA:-->
    <link rel="stylesheet" href="https://use.typekit.net/mdi6pgl.css">
</head>

<body>
    <header>
        <h1 style="font-family:shuriken-std, sans-serif; color: blue;">
            <marquee> BIENVENIDO</marquee>
        </h1>
    </header>
</body>

</html>