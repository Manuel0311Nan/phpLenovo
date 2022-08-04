<?php
require_once(dirname(__FILE__) . '/Ayudas/functions.php');


require 'index.html.php';
require "registro.php";
// require './mailer/Exception.php';
// require './mailer/PHPMailer.php';
// require './mailer/SMTP.php';

require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$email = 'manuzz3112@gmail.com';
$asunto = 'Mensaje de prueba';
$body = 'Texto de prueba';
$recipients = $email;
sendEmail($email, $asunto, $body);


// try {
//     //Server settings
//     $mail = new PHPMailer(true);
//     $mail->isSMTP(true); 
//     $mail->Mailer = "SMTP";
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//     $mail->Host       = 'smtp.gmail.com';
//     $mail->Port       = 587;
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//     $mail->SMTPAuth   = true;
//     $mail->Username   = 'manuelcodex23@gmail.com';
//     $mail->Password   = 'omcvchxkvcdsztae';

//     $mail->CharSet ='UTF-8';

//     //Recipients
//     $mail->setFrom('manuelcodex23@gmail.com', 'Manuel');
//     // $mail->addAddress($email, $nombre);    
//     $mail->addAddress('manuzz3112@gmail.com', 'Manu');     //Add a recipient
//     // $mail->addAddress('ellen@example.com');
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(false);                                  //Set email format to HTML
//     $mail->Subject = 'Email de prueba';
//     $mail->Body    = 'Hola, enviando un correo de prueba';

//     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent correctly';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
    ?>