<?php
	
// Llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "contacto@tienda-ambar.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

if (mail($destinatario, $asunto, $carta)) {
	echo "<script>alert('Correo enviado exitosamente')</script>";
	echo "<script>window.location.replace('index.php',1000);</script>";
}else{
	echo "<script>alert('Error al enviar correo, intente nuevamente')</script>";
	echo "<script>window.location.replace('contacto.php',1000);</script>";
}



?>