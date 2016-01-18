<?php
 require_once "Mail.php";
 
 $from = "From: contacto@lws.mx";
 $to = "ruben.vera.j@gmail.com";
 $subject = ">Mensaje de Contacto";
       $port = "26";
 $body = "Enviado por:". $_POST['nombre'] . " " .$_POST['empresa']." \n\r"."E-Mail: " .
$_POST['mail'] . " \n\rTelefono:". $_POST['tel']."\n\r"." \n\rAsunto:". $_POST['asunto']."\n\r". $_POST['mensaje'];
 
 
 $smtp_params["host"] = "mail.lws.mx";         // SMTP host
        $smtp_params["port"] = "26";               // SMTP Port (usually 25)    
        $smtp_params["auth"]     = true;
        $smtp_params["username"] = "contacto@lws.mx";
        $smtp_params["password"] = "contact";

 
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory("smtp", $smtp_params); 
 $mail = $smtp->send($to, $headers, $body);

 if (PEAR::isError($mail)) {
 //echo "<script>alert('Information updated')</script>";
  // echo("<p>" . $mail->getMessage() . "</p>");
  } else {
  // echo("<p>Message successfully sent!</p>");
  }


?>