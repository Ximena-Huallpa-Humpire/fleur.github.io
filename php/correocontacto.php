<?php

$destinatario = '';
$nombre = $_POST['Nombre'];
$mensaje = $_POST['Mensaje'];
$correo = $_POST['Correo'];

$header = "Enviado desde FLEUR";
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;
	
mail($destinatario, $mensajecompleto, $header);
echo "<script>alert('Mensaje enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";

?>