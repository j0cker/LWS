<!DOCTYPE HTML>
<html><head>
<link rel="stylesheet" type="text/css" href="css/estilos_lws_hijos.css">


<meta charset="UTF-8">
<meta http-equiv="Refresh" content="3;url=fail_files/pg_formulario_prueba4.html">
<title>Documento sin título</title>
</head>

<body style=" position:absolute; top:0; left:0;">
<div style="width:380px; height:460px; background-color:#B5C4CC;">
  
  <div class="txt_general" style="margin:10px; line-height:16px; padding-top:0px;">Conocer su opinión es fundamental para seguir creciendo, tenemos distintos medios por los cuales usted podrá contactarnos y mantenerse comunicado con nuestro equipo.</div>

<div class="txt_general" style="margin:10px; line-height:16px;">

<span class="bold">





<%
'Modificar este valor con su direccion de correo a la que se enviara el formulario
	var_destinatario = "ruben.vera.j@gmail.com"
'No es necesario modificar el codigo restante

'Creacion de variables para almacenar los campos del formulario
	var_nombre = Request.Form("nombre")
	var_correo = Request.Form("mail")
	var_empresa = Request.Form("empresa")
	var_telefono = Request.Form("tel")
	var_asunto = Request.Form("asunto")
	var_comentarios = Request.Form("mensaje")

'Creacion del cuerpo del mensaje
	var_mensaje = "Mensaje enviado desde el formulario web: " & nombre & chr(10) & chr(10)_
			& "Nombre: " & var_nombre & chr(10)_
			& "Empresa: " & var_empresa & chr(10)_
			& "Telefono: " & var_telefono & chr(10)_
			& "Correo Electronico: " & var_correo & chr(10) & chr(10)_
			& "Asunto: " & var_asunto & chr(10)_
			& "Comentarios: " & var_comentarios

'Procesamiento del envio de correo
	Set Mailer = Server.CreateObject("CDONTS.NewMail")
	Mailer.From = var_nombre & "<" & var_correo & ">"
	Mailer.To = var_destinatario
	Mailer.To = "ruben.vera.j@gmail.com"
	Mailer.Subject = var_asunto
	Mailer.Body = var_mensaje
	Mailer.BodyFormat = 1
	Mailer.MailFormat = 1
	Mailer.Importance = 2
	Mailer.Send
	set Mailer = nothing
	
	
	
%>

<img style="padding-left:10px;" src="img/fom-img-em-09.png" alt="ok"/>

</div>
</div>


</body>
</html>