<?php
$name = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];

$titulo = 'Mensaje desde la web - ParisPeugeot.com.ar';
$mensaje = '<html>';
$mensaje = '<body>';
$mensaje = 'Mensaje desde formulario WEB: parispeugeot.com.ar';
$mensaje .= '<br> Nombre: ' . $name . "\r\n";
$mensaje .= '<br> Apellido: ' . $apellido . "\r\n";
$mensaje .= '<br> Telefono: ' . $tel . "\r\n";
$mensaje .= '<br> Correo: ' . $email . "\r\n";
$mensaje .= '<br> Mensaje: ' . $message . "\r\n";
$mensaje .= '</body>';
$mensaje .= '</html>';

$cabeceras = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
'From: mauro.soratto@parisautos.com.ar' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$para1 = 'mauro.soratto@parisautos.com.ar';
$para2 = 'recepcion@parisautos.com.ar';
$para3 = 'sistemas@parisautos.com.ar';

mail($para1, $titulo, $mensaje, $cabeceras);
mail($para2, $titulo, $mensaje, $cabeceras);
mail($para3, $titulo, $mensaje, $cabeceras);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script>alert("Su consulta ha sido enviada. Nos pondremos en contacto con usted lo mas pronto posible.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">

</head>
