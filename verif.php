<?php  use PHPMailer\PHPMailer\PHPMailer; use PHPMailer\PHPMailer\Exception;  require '../PHPMailer/src/Exception.php'; require '../PHPMailer/src/PHPMailer.php'; require '../PHPMailer/src/SMTP.php';  // Instantiation and passing true enables exceptions $mail = new PHPMailer(true);  try {     //Server settings     $mail->SMTPDebug = 0;                                       // Enable verbose debug output     $mail->isSMTP();                                            // Set mailer to use SMTP     $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication     $mail->Username   = 'clemmomo10@gmail.com';                     // SMTP username     $mail->Password   = 'Nala123456';                               // SMTP password     $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, ssl also accepted     $mail->Port       = 465;                                    // TCP port to connect to      //Recipients     $mail->SetFrom($_POST['mail'], $_POST['name']);               //mail qui va envoyer     $mail->addAddress('haddadi.maureen@gmail.com');     //addresse mail qui va recevoir      // Content     $mail->isHTML(true);                                  // Set email format to HTML     $mail->Subject = $_POST['subject'];     $mail->Body    = $_POST['text'];     $mail->AltBody = $_POST['text'];      $mail->send();     echo 'Votre message a bien été envoyé'; } catch (Exception $e) {     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; }  ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'suoi.style@gmail.com';                     // SMTP username
    $mail->Password   = 'rutkinhnghiem';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, ssl also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->SetFrom($_POST['mail'], $_POST['name']);               //mail qui va envoyer
    $mail->addAddress('clementinesaintmaxent@gmail.com');     //addresse mail qui va recevoir

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['text'];
    $mail->AltBody = $_POST['text'];

    $mail->send();
    echo 'Votre message a bien été envoyé';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
