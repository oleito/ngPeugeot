<?php
	$name = $_POST['nombre'];
	$tel = $_POST['tel'];
	$message = $_POST['message'];

	$para = 'sistemas@parisautos.com.ar';

	$titulo = 'Mensaje desde la web - ParisAutos';
	$mensaje = '<html>';
	$mensaje = '<body>';
	$mensaje = 'Mensaje enviado desde sitio WEB:';
	$mensaje .= '<br> Nombre: ' . $name . "\r\n";
	$mensaje .= '<br> Telefono: ' . $tel . "\r\n";
	$mensaje .= '<br> Mensaje: ' . $message . "\r\n";
	$mensaje .= '</body>';
	$mensaje .= '</html>';

$cabeceras = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
'From: sistemas@parisautos.com.ar' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script>alert("Su solicitud de turno ha sido enviada. Nos pondremos en contacto con usted lo mas pronto posible.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">

</head>
