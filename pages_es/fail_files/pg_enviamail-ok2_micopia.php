<!DOCTYPE HTML>
<html><head>
<link rel="stylesheet" type="text/css" href="../css/estilos_lws_hijos.css">


<meta charset="UTF-8">
<title>Documento sin título</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">
<!--
body {
	background-color: #B5C4CC;
}
-->
</style></head>

<body style=" position:absolute; top:0; left:0;">
<div style="width:380px; height:460px; background-color:#B5C4CC;">
  <div class="txt_general" style="margin:10px; line-height:16px;">

<span class="bold">





<?php

   // Validamos la direccion de correo electronico
  
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

# Verifico que los campos se hallan completado
if ($nombre == "" AND $mail == "" AND $mensaje == "") {	
  # Muestro mensaje de error
  echo '
  <head>
  	<meta http-equiv="Refresh" content="3;url=pg_formulario-ok2.html">
  </head>

	<p class="ss_folleto_tl2"><p>
	<p class="txt_mision_tl"><p>
	<img style="padding-left:10px;" src="img/fom-img-em-08.png" alt=""/>';  
}


# Caso contrario, procedo a enviar el email
else{
	
	
  $header = 'From: ' . $mail . " \r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
  $header .= "Mime-Version: 1.0 \r\n";
  $header .= "Content-Type: text/plain";

  $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
  $mensaje .= "Empresa: " . $mail . " \r\n";
  $mensaje .= "Su Teléfono es: " . $tel . " \r\n";
  $mensaje .= "Su e-Mail es: " . $mail . " \r\n";
   
  $mensaje .= "El Motivo de este mail es: " . $motivo . " \r\n";

  $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
  $mensaje .= "Enviado el " . date('d/m/Y', time());

  $para = 'contacto@lws.mx';
  $asunto = 'Mensaje de Contacto desde el formulario';

  if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
    echo 
	'<head>
		<meta http-equiv="Refresh" content="3;url=pg_formulario-ok2.html">
	</head>
	<p></p>
	<p><p>
	
	<img style="padding-left:10px;" src="img/fom-img-em-09.png" alt="ok"/>';
  }
  else {
    echo '
	<head>
		<meta http-equiv="Refresh" content="3;url=pg_formulario-ok2.html">
	</head>
<p class="txt_mision_tl"><p>
	<p class="ss_folleto_tl2"><p>
	
	<img style="padding-left:10px;"src="img/fom-img-em-08.png" alt=""/>';
  }
}
?>



</div>
</div>


</body>
</html>