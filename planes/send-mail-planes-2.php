<?php
/**
 *  ENVIADOR PLANES
 */
$name = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];

$titulo = 'Mensaje desde PLANES PARIS';
$mensaje = '<html>';
$mensaje = '<body>';
$mensaje = 'Mensaje desde formulario WEB: parispeugeot.com.ar/planes';
$mensaje .= '<br> Nombre: ' . $name . "\r\n";
$mensaje .= '<br> Telefono: ' . $tel . "\r\n";
$mensaje .= '<br> Correo: ' . $email . "\r\n";
$mensaje .= '<br> Correo: ' . $message . "\r\n";
$mensaje .= '</body>';
$mensaje .= '</html>';

$cabeceras = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
'From: diego.moreno@parisautos.com.ar' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$para1 = 'diego.moreno@parisautos.com.ar';
$para2 = 'sitemas@parisautos.com.ar';

// mail($para1, $titulo, $mensaje, $cabeceras);
mail($para2, $titulo, $mensaje, $cabeceras);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script>alert("Gracias por contactarte. Te llamaremos cuanto antes.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">

</head>
