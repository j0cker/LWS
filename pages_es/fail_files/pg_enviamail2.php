<!DOCTYPE HTML>
<html><head>
<link rel="stylesheet" type="text/css" href="../css/estilos_lws_hijos.css">


<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body style="margin:0; padding:0; top:0;">
<div style="width:380px; height:460px; background-color:#B5C4CC;">
  
  <div class="txt_general" style="margin:10px; line-height:16px; padding-top:0px;">Conocer su opinión es fundamental para seguir creciendo, tenemos distintos medios por los cuales usted podrá contactarnos y mantenerse comunicado con nuestro equipo.</div>

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
  	<meta http-equiv="Refresh" content="3;url=http://google.com">
  </head>

	<p>EN 5SEG. LO REDIRIGIREMOS A LA PAGINA ANTERIOR. GRACIAS<p>
	<p>ERROR<p>
	<img src="imagenes/oopss.png" width="300" height="300" alt=""/>';  
}


# Caso contrario, procedo a enviar el email
else{
	
	
  $header = 'From: ' . $mail . " \r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
  $header .= "Mime-Version: 1.0 \r\n";
  $header .= "Content-Type: text/plain";

  $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
  $mensaje .= "Empresa: " . $empresa . " \r\n";
  $mensaje .= "Su Teléfono es: " . $tel . " \r\n";
  $mensaje .= "Su e-Mail es: " . $mail . " \r\n";
   
  $mensaje .= "El Motivo de este mail es: " . $motivo . " \r\n";

  $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
  $mensaje .= "Enviado el " . date('d/m/Y', time());

  $para = 'ruben.vera.j@gmail.com';
  $asunto = 'CURSO NEGOCIACIÓN: Mensaje de Contacto desde el formulario';

  if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
    echo 
	'<head>
		<meta http-equiv="Refresh" content="3;url=http://shared.ser.com.mx/negociacion/contacto.html">
	</head>
	
	<p>EN 5SEG. LO REDIRIGIREMOS A LA PAGINA ANTERIOR.GRACIAS<p>
	<p>ok</p>
	<img src="imagenes/ok-01.png" width="300" height="300" alt="ok"/>';
  }
  else {
    echo '
	<head>
		<meta http-equiv="Refresh" content="3;url=http://shared.ser.com.mx/negociacion/contacto.html">
	</head>

	<p>EN 5SEG. LO REDIRIGIREMOS A LA PAGINA ANTERIOR. GRACIAS<p>
	<p>ERROR</p>
	<img src="imagenes/oopss.png" width="300" height="300" alt="oopss"/>';
  }
}
?>



</div>
</div>


</body>
</html>