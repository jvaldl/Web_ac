<?php

if(isset($_POST['btn_send']))
  {
echo("<script>console.log('boton');</script>");
}

$destinatario = "claumn87@gmail.com; jvaldl00@gmail.com"; 
$asunto = "CONTACTO WEB AC INDUSTRIAL SOLUTIONS"; 

$nombre = strip_tags($_POST['name']);
$correo = strip_tags($_POST['email']);
$telefono = strip_tags($_POST['subject']);
$mensaje = strip_tags($_POST['message']);

$cuerpo = '<p>Nombre:'. $nombre . '</p>' . '<p>Correo:' . $correo .'</p>' . '<p>Tel:' . $asunto . '</p>' . '<p>Mensaje:' . $mensaje . '</p>'; 

//para el envio en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//direccion del remitente 
$headers .= "From:" . $nombre . "<".$correo.">\r\n"; 

$bool = mail($destinatario,$asunto,$cuerpo,$headers) ;
if($bool){
  echo("Mensaje enviado");
  // echo("<script>alert('Mensaje enviado');</script>");
  // echo("<script>window.location='contact.html';</script>");
  //echo("<script>window.location.replace('http://www.acindustrialsolutions.com/contact.html');</script>");
  
}else{
    echo("Mensaje NO enviado");
    //echo("<script>alert('Mensaje no enviado');</script>");
    //echo("<script>window.location.replace('http://www.acindustrialsolutions.com/contact.html');</script>");
    //echo("<script>window.location='contact.html';</script>");
}

?>