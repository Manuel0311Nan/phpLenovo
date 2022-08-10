<?php
require_once('./Ayudas/functions.php');
require_once('./config/config.php');
$conexion = connectServer(SERVER, USER, PASS, DATABASE);

require 'index.html.php';
require "registro.php";
require './mailer/Exception.php';
require './mailer/PHPMailer.php';
require './mailer/SMTP.php';

require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$email = 'manuzz3112@gmail.com';
$asunto = 'Asunto de prueba';
$body = 'Mensaje de prueba';
// $recipients = $email;

$mail = new PHPMailer();
sendEmail($email, $asunto, $body);

    ?>