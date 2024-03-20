<?php

// FORMULARIO CONSULTORIA DE INVERSION

// CAMPOS DE FORMULARIO
$destino2 = "info@taurex.com.co";

$nombre2 = $_POST["nombre2"];
$telefono2 = $_POST["telefono2"];
$correo2 = $_POST["correo2"];
$mensaje2 = $_POST["mensaje2"];

$contenido2 = "Nombre: " . $nombre2 . "\nTelefono: " . $telefono2 . "\nCorreo: " . $correo2 . "\nMensaje: " . $mensaje2;

mail($destino, "Contacto", $contenido2);

header("location: ../fondoIN.html");

?>
