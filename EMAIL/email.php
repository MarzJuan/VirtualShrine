<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isHTML(true);// Set email format to HTML

$mail->Username = 'mauricio.angelo.d.5478@gmail.com';// SMTP username
$mail->Password = 'bqvebckyeakauhpw';// SMTP password

$mail->setFrom('mauricio.angelo.d.5478@gmail.com', 'Angelo Mauricio');//Your application NAME and EMAIL
$mail->Subject = 'Capstone Project';//Message subject
$mail->MsgHTML('Testing');// Message body
$mail->addAddress('kjnacional11@gmail.com', 'Kristine Nacional');// Target email


$mail->send();
?>