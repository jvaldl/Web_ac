<?php

$destinatario = "jvaldl00@gmail.com" . ", ";
$destinatario .= "claumn87@gmail.com" . ", ";
$destinatario .= "administracion@acindustrialsolutions.com"; 

$nombre = strip_tags($_POST['name']);
$correo = strip_tags($_POST['email']);
$asunto = 'WEB:' . strip_tags($_POST['subject']);
$mensaje = strip_tags($_POST['message']);

$cuerpo =  '<table width="50%" align="center" border="0" cellspacing="0" cellpadding="0">';
$cuerpo .= '    <tr>';
$cuerpo .= '        <td align="center" style="padding: 0 0 0 3px; background:#249285; color:white; font-size:larger">';
$cuerpo .= '            <div style="display: table; height: 100px; overflow: hidden;">';
$cuerpo .= '                <div style="display: table-cell; vertical-align: middle;">';
$cuerpo .= '                    <img src="http://acindustrialsolutions.com/images/logo.png" alt="">';
$cuerpo .= '                    <br />';
$cuerpo .= '                    <div>';
$cuerpo .= '                        MENSAJE DESDE EL PORTAL WEB';
$cuerpo .= '                    </div>';
$cuerpo .= '                </div>';
$cuerpo .= '            </div>';
$cuerpo .= '        </td>';
$cuerpo .= '    </tr>';
$cuerpo .= '    <tr>';
$cuerpo .= '        <td class="h1" style="padding: 5px 0 0 0; text-wrap:normal; text-align:justify">';
$cuerpo .= '            <br />';
$cuerpo .= '				<p>Nombre:' . $nombre ;
$cuerpo .= '				</p>' ;
$cuerpo .= '				<p>Correo:' . $correo;
$cuerpo .= '				</p>';
$cuerpo .= '				<p>Mensaje:' . $mensaje;
$cuerpo .= '				</p>';
$cuerpo .= '        </td>';
$cuerpo .= '    </tr>';
$cuerpo .= '    <tr>';
$cuerpo .= '        <td >';
$cuerpo .= '            <br />';
$cuerpo .= '        </td>';
$cuerpo .= '    </tr>';
$cuerpo .= '    <tr align="center" style="padding: 0 0 0 3px; background:#249285; color:white; font-size:small">';
$cuerpo .= '        <td>';
$cuerpo .= '            <div style="display: table; height: 20px; overflow: hidden;">';
$cuerpo .= '                <div style="display: table-cell; vertical-align: middle;">';
$cuerpo .= '                    <div>';
$cuerpo .= '                       AC. Industrial Solutions.';
$cuerpo .= '                    </div>';
$cuerpo .= '                </div>';
$cuerpo .= '            </div>';
$cuerpo .= '        </td>';
$cuerpo .= '    </tr>';
$cuerpo .= '</table>';

//para el envio en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

// Additional headers
$headers .= "From:" . $nombre . "<".$correo.">\r\n"; 

$bool = mail($destinatario,$asunto,$cuerpo,$headers) ;

?>