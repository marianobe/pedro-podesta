<?php

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$to = 'miranda_federico@estudioindex.com.ar';
$subject = 'Contacto - Officia';

$email_body = 'Nombre: ' . $nombre . "<br> \r\n";
$email_body .= 'Empresa: ' . $empresa . "<br> \r\n";
$email_body .= 'Email: ' . $email . "<br> \r\n";
$email_body .= 'Mensaje: ' . $mensaje . "<br> \r\n";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From:" . $email . "\r\n";

mail($to, $subject, $email_body, $headers);
