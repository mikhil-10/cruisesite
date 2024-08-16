<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\phpmailer\src\SMTP.php';



$uname=$_POST["name"];
$emailm=$_POST["email"];

$reply=$_POST["reply"];



$mail = new PHPMailer(true);

$email = '';
$password = ' ';

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipient information
    $mail->setFrom($email, $emailm);
    $mail->addAddress($emailm, $uname);
    $mail->addReplyTo($email, 'Royal Cruise');

    //Attachments
        //Add attachments
    // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Reply From Royal Cruise';
    $mail->Body    =$reply;

    $mail->send();
    header("Location:admincon.php");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}
