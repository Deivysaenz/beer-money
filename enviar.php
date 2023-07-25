<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$textarea = $_POST['mensaje'];
$tel = $_POST['tel'];

$header = 'From: ' . $mail . " \r\n" or die("Error al Enviar el Email");
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su Numero de Celular es: " . $tel . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'eliecid123@gmail.com';
$asunto = 'Formulario';

mail($para, $asunto, utf8_decode($mensaje), $header);
  
?>

<script>
setTimeout("location.href='index.html'", 1000);
</script>
