<?php

$destinatario = "jvaldl00@gmail.com" . ", ";
$destinatario .= "claumn87@gmail.com" . ", ";
$destinatario .= "administracion@acindustrialsolutions.com"; 

$asunto = "CONTACTO WEB AC INDUSTRIAL SOLUTIONS"; 

$nombre = strip_tags($_POST['name']);
$correo = strip_tags($_POST['email']);
$telefono = strip_tags($_POST['subject']);
$mensaje = strip_tags($_POST['message']);

$cuerpo = '<p>Nombre:'. $nombre . '</p>' . '<p>Correo:' . $correo .'</p>' . '<p>Tel:' . $asunto . '</p>' . '<p>Mensaje:' . $mensaje . '</p>'; 

//para el envio en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

// Additional headers
$headers .= "From:" . $nombre . "<".$correo.">\r\n"; 

$bool = mail($destinatario,$asunto,$cuerpo,$headers) ;

?>