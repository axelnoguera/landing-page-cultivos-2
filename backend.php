<?php
if (isset($_POST["boton"])) {
  if (strlen($_POST["nombre"]) >= 1 && strlen($_POST["nombreMail"]) >= 1 && strlen($_POST["mensaje"]) >= 1) {
      
    
      $nombre = strtolower($_POST["nombre"]);
      $nombreMail = strtolower($_POST["nombreMail"]);
      $mensaje = strtolower($_POST["mensaje"]);

     
      $nombreSanitizado = strip_tags($nombre);
      $nombreMailSanitizado = filter_var($nombreMail, FILTER_SANITIZE_EMAIL);
      $mensajeSanitizado = strip_tags($mensaje);


      
      function sanitizacionCorreo($validacion) {
          
          $prohibicion = array("para:", "cc:", "bcc:", "subject:", "\r", "\n");
      
          foreach ($prohibicion as $palabra) {
         
              if (strpos(strtolower($validacion), strtolower($palabra)) !== false) {
                  return false; 
              }
          }
          return true;
      }

   

      if (sanitizacionCorreo($nombreSanitizado) && sanitizacionCorreo($nombreMailSanitizado) && sanitizacionCorreo($mensajeSanitizado)) {
          
          $mensajeListoParaEnviar = "Soy " . $nombreSanitizado . " y mi mail es: " . $nombreMailSanitizado . ", " . $mensajeSanitizado;

          $destinatario = "axelnoguera667@gmail.com";
          $asunto = "Quiero asistir";

          
          $header = "From: axelnoguera667@gmail.com" . "\r\n";
          $header .= "Reply-To: axelnoguera667@gmail.com" . "\r\n";
          $header .= "X-Mailer: PHP/" . phpversion();
          
        
          if ($nombre === $nombreSanitizado && $nombreMail === $nombreMailSanitizado && $mensaje === $mensajeSanitizado) {
              if (mail($destinatario, $asunto, $mensajeListoParaEnviar, $header)) {
                  echo "El mensaje ha sido enviado correctamente.";
              }
          } 
      } 
  }
}


?>
