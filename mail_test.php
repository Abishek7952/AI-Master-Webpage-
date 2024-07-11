<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.9.1/src/Exception.php';
require 'PHPMailer-6.9.1/src/PHPMailer.php';
require 'PHPMailer-6.9.1/src/SMTP.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions

try {
    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'abishekr316@gmail.com'; // SMTP username
    $mail->Password = '#abi316*'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `PHPMailer::ENCRYPTION_STARTTLS` also accepted
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('abishekr316@gmail.com', 'Your Name');
    $mail->addAddress('abishekr316@gmail.com', 'Recipient Name'); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Testing PHPMailer';
    $mail->Body = 'This is a test email sent using PHPMailer';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
