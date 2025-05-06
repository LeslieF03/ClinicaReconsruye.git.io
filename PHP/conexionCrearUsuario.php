<?php

include("conexion.php");

//Variables para recibir y guardar datos del formulario de registro
$nombres = $_POST("Nombres");
$P_apellido = $_POST("Primer_Apellido");
$S_apellido = $_POST("Segundo_Apellido");
$usuario = $_POST("usuario");
$contraseña = $_POST("contraseña");
$correo = $_POST("correo");
$telefono = $_POST("telefono");

$passwordHash = password_hash($contraseña, PASSWORD_BCRYPT); //Para encriptar la contraseña
$fotoPerfil = "img/$nombres/Avatar.webp";


?>