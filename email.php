<?php

if (!empty($_POST)) {

    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment']) ){
        $arrayMsj['success'] = FALSE;
        $arrayMsj['message'] = 'Todos los campos son requeridos';
        echo (json_encode($arrayMsj));
        exit;
    }

    require 'include/PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = "smtp.live.com";
    $mail->SMTPAuth= true;
    $mail->Port = 587;
    $mail->Username = "soporte@backing.com.co";
    $mail->Password = "3123231";
    $mail->SMTPSecure = 'tls';
    $mail->FromName ='Formulario Backing Web ' ;
    $mail->CharSet = 'UTF-8';
    $mail->From = 'soporte@backing.com.co';
    $mail->Subject = 'Formulario Backing Web';
    $mail->MsgHTML('Mensaje con HTML');
    $mail->isHTML(true);
    $template = '<h1>Mensaje enviado desde el formulario de backing.com.co</h1><br><br>';
    $template .= 'Nombre: ' . $_POST['name']  . '<br>';
    $template .= 'Email: ' . $_POST['email'] .'<br>';
    $template .= 'Mensaje: <br>' . $_POST['comment'] ;
    $mail->Body = $template;
    #$mail->AddAddress('backing@backing.com.co', '');
    #$mail->AddAddress('jpena@backing.com.co', '');
    #$mail->AddAddress('soporte@backing.com.co', '');
    $mail->AddAddress('juan2ramos@gmail.com', '');

    if(!$mail->send()){
        $arrayMsj['success'] = TRUE;
        $arrayMsj['message'] = 'algo sucedio, no se pudo enviar el mensaje!!';
    }else{
        $arrayMsj['success'] = TRUE;
        $arrayMsj['message'] = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
    }

    $arrayMsj['success'] = TRUE;
    $arrayMsj['message'] = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
    echo (json_encode($arrayMsj));
    exit;
}else{
    echo "Error al intentar acceder";
}