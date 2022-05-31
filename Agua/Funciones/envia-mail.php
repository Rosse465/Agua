<?php

    //codigo php para definir mi smtp con GMAIL

    require 'phpmailer/PHPMailerAutoload.php';

    $nombre=$_REQUEST['nombre'];
    $mensaje=$_REQUEST['coment'];
    $correo=$_REQUEST['correo'];
    $res="";

    $mail= new PHPmailer;
    $mail->isSMTP();

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='saul.calan2889@alumnos.udg.mx';
    $mail->Password='hansome1';

    $mail->setFrom($correo, $nombre);
    $mail->addAddress('saul.calan@alumnos.udg.mx');
    //optional:
    $mail->addReplyTo('saul.calan2889@alumnos.udg.mx');

    $mail->isHTML(true);
    $mail->Subject='De: '.$nombre;
    $mail->Body=$mensaje;

    if(!$mail->send()){
        $res= "Message not sent";
    }else{
        $res= "Message sent";
    }
    echo "<script>
        alert($res);
    </script>";
    header("Location: ../index.php");

?>