<?php
$nombre = $_POST['nombre'];
$apellido = $_POSR['apellido'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$delegacion = $_POST['delegacion'];
$cp = $_POST['postal'];



$header = 'From' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" .phpversion() . "\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . Snombre." " .$apellido . ",\r\n";
$mensaje .= "Asunto: " . $asunto . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . ",\r\n";
$mensaje .= "Su Telefono es: " . $telefono .",\r\n";
$mensaje .= "Direccion es : " . $direccion . " " . $ciudad . " " . $delegacion . " " . $cp. ",\r\n" ;
$mensaje .= "Enviado el : " .date('d/m/Y', time());


$para = "ventas@elcuartodelavado.com";
$asunto ="Mensaje desde la pagina Contacto Acueducto";

if(mail($para, $asunto, utf8_decode($mensaje), $header))
    echo"<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
    echo"<script type='text/javascript'>window.location.href='gracias.html';</script>";
?>
