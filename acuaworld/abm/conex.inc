<?php

$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "";
$bd_base = "acuadb";
$conex = mysqli_connect($bd_host, $bd_usuario, $bd_password, $bd_base);

if (!$conex) {
    //header("Location: errorPage.php?msg=NO se pudo CONECTAR al Servidor");
} // endif

?>