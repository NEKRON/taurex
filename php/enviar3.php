<?php

// FORMULARIO CONTACTO 

// CAMPOS FORMULARIO
$destino3 = "info@taurex.com.co";

$nombre3 = $_POST["nombre3"];
$correo3 = $_POST["correo3"];
$telefono3 = $_POST["telefono3"];
$mensaje3 = $_POST["mensaje3"];

$contenido3 = "Nombre: " . $nombre3 . "\nCorreo: " . $correo3 . "\nTelefono: " . $telefono3 . "\nMensaje" . $mensaje3;

mail($destino3, "Contacto: ", $contenido3);

header("location: ../index.html");

?>