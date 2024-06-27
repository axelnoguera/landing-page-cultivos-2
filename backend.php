<?php
if(isset($_POST["boton"])){ 
  if(strlen($_POST["nombre"]) >= 1 && strlen($_POST["nombreMail"]) >= 1 && strlen($_POST["mensaje"]) >= 1){     
      
    $nombre = $_POST["nombre"];
    $nombreMail = $_POST["nombreMail"];
    $mensaje = $_POST["mensaje"] . ", mi mail es " . $nombreMail;

    $nombreSanitizado = strip_tags($_POST["nombre"]);
    $nombreMailSanitizado = filter_var($_POST["nombreMail"], FILTER_SANITIZE_EMAIL);
    $mensajeSanitizado = strip_tags($_POST["mensaje"]) . ", mi mail es " . $nombreMailSanitizado;

    $destinatario = "axelnoguera667@gmail.com";
    $asunto = "quiero asistir";
    $header = "From: axelnoguera667@gmail.com" . "\r\n";
    $header.= "Reply-to axelnoguera667@gmail.com" . "\r\n";
    
    if($nombre === $nombreSanitizado && $nombreMail === $nombreMailSanitizado && $mensaje === $mensajeSanitizado){
      $mail = mail($destinatario,$asunto,$mensajeSanitizado,$header);
    }
  }
};


?>
