<?php
 require 'include/PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer(true);
    try {
   $mail = new PHPMailer;
    $mail->IsSendmail();
    $mail->FromName ='Formulario via' ;
    $mail->CharSet = 'UTF-8';
    $mail->From = 'juan2ramos@gmail.com';
    $mail->Subject ='sd';
    $mail->MsgHTML('Mensaje con HTML');
    $template = '<h1>Mensaje enviado desde el formulario de via</h1><br><br>';
    $template .= 'Nombre: <br>';
    $template .= 'Email: <br>';
    $template .= 'Mensaje: <br>' ;
    $mail->Body = $template;
    $mail->AddAddress('juan2ramos@hotmail.com', '');
    $mail->Send(); 

    $arrayMsj['success'] = TRUE;
    $arrayMsj['message'] = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
    echo (json_encode($arrayMsj));
    } catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
