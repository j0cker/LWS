<!DOCTYPE HTML>
<html><head>
<link rel="stylesheet" type="text/css" href="css/estilos_lws_hijos.css">


<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body style=" position:absolute; top:0; left:0;">
<div style="width:380px; height:460px; background-color:#B5C4CC;">
  
  <div class="txt_general" style="margin:10px; line-height:16px; padding-top:0px;">Conocer su opinión es fundamental para seguir creciendo, tenemos distintos medios por los cuales usted podrá contactarnos y mantenerse comunicado con nuestro equipo.</div>

<div class="txt_general" style="margin:10px; line-height:16px;">

<span class="bold">





<?php
 require_once "../Mail.php";
 

 if (!strchr($_POST['mail'],"@") || !strchr($_POST['mail'],".")) { echo "<b>No es un correo valido</b><br/>"; $valida = false; }
   
   else{
   
    // Si las comprobaciones son correctas


# Guardo en la variable los campos del form
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$motivo = $_POST['asunto'];
$mensaje = $_Post['mensaje'];

   }
 
 
 $from = "From: contacto@lws.mx";
 $to = "ruben.vera.j@gmail.com.com";
 $subject = ">Mensaje de Contacto";
       $port = "26";
 $mensaje = "correo!!!!!!!!!!!!!!";
 $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
  $mensaje .= "Empresa: " . $mail . " \r\n";
  $mensaje .= "Su Teléfono es: " . $tel . " \r\n";
  $mensaje .= "Su e-Mail es: " . $mail . " \r\n";
   
  $mensaje .= "El Motivo de este mail es: " . $motivo . " \r\n";

  $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
  $mensaje .= "Enviado el " . date('d/m/Y', time());
 
 
 $smtp_params["host"] = "mail.lws.mx";         // SMTP host
        $smtp_params["port"] = "26";               // SMTP Port (usually 25)    
        $smtp_params["auth"]     = true;
        $smtp_params["username"] = "contacto@lws.mx";
        $smtp_params["password"] = "contacto";

 
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory("smtp", $smtp_params); 
 $mail = $smtp->send($to, $headers, $body);

 if (PEAR::isError($mail)) {
 echo "<script>alert('Information updated')</script>";
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
    echo 
	'<head>
		<meta http-equiv="Refresh" content="3;url=http://www.lws.mx/pages_es/pg_formulario-ok2.html">
	</head>
	<p></p>
	<p><p>
	
	<img style="padding-left:10px;" src="img/fom-img-em-09.png" alt="ok"/>';
  }
?>



</div>
</div>


</body>
</html>