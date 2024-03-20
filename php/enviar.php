<?php
// FORMULARIO INDEX

// CORREO ELECTRONICO
$destino = "info@taurex.com.co";

// CAMPOS DE FORMULARIO
$nombre1 = $_POST["nombre1"];
$apellido1 = $_POST["apellido1"];
$correo1 = $_POST["correo1"];
$telefono1 = $_POST["telefono1"];

$contenido = "Nombre: " . $nombre1 . "\nApellido: " . $apellido1 . "\nCorreo: " . $correo1 . "\nTelefono: " . $telefono1;

mail($destino, "Contacto", $contenido);

header("location: ../index.html");

?>

