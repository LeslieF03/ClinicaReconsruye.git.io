<?php

//Variables para la conexión
$servidor = "recontruye.ddns.net"; 
$usuario = "root";
$contraseña = "";
$BD = "BD_RECONSTRUYE"; 

//Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $BD);

//Verificar conexión
if (!$conexion) {
    echo "Falló la conexión <br>";
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}


?>