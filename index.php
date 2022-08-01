<?php
require_once(dirname(__FILE__) . '/Ayudas/functions.php');


require 'index.html.php';
require "registro.php";
require './mailer/Exception.php';
require './mailer/PHPMailer.php';
require './mailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$conexion = connectServer(SERVER, USER, PASS, DATABASE);



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                              //Enable SMTP authentication
    $mail->Username   = 'manukvothe@hotmail.com';                     //SMTP username
    $mail->Password   = 'Garethbalecr94';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 443;                                                                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPDebug = 2;
    $mail->SMTPSecure = 'ssl';

    //Recipients
    $mail->setFrom('manukvothe@hotmail.com', 'Manuel');
    // $mail->addAddress($email, $nombre);    
        $mail->addAddress('manuzz3112@gmail.com', 'Manu');     //Add a recipient
    // $mail->addAddress('ellen@example.com');
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email de prueba';
    $mail->Body    = 'Hola, enviando un correo de prueba';
    $mail->CharSet ='UTF-8';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent correctly';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    ?>