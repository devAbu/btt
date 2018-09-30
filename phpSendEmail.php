<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);   // Passing `true` enables exceptions

$firstSign = $_REQUEST['firstSign'];
$lastSign = $_REQUEST['lastSign'];
$emailSign = $_REQUEST['emailSign'];

echo $firstSign . '<br>';
echo $lastSign . '<br>';
echo $emailSign . '<br>';

try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'abdulrahman.almonajed@gmail.com';                 // SMTP username
    $mail->Password = 'camqaqoelmxzbouh';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply@btt.ba', 'BTT');
    /* TODO: povuc email od korisnika i na taj poslat verifikaciju */
    $mail->addAddress($emailSign);     // Add a recipient
          // Name is optional
    /* $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
     */
    //Attachments
     /*$mail->addAttachment('/var/tmp/file.tar.gz');           // Add attachments
    $mail->addAttachment('images/icon.png', 'BTT logo');  */ // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'BTT.ba | E-mail verification';
    $mail->Body = '<center>
    Dear <b>' . $firstSign . ' ' . $lastSign . '</b>, <br> 
    First of all, we want to thank you for creating account at BTT.BA <br>
    Before you can login with your account information, please click on link below to verify your email address<br>
    http://localhost/github/btt/verify.php?email=' . $emailSign . '
        </center> ';
    $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';


    echo ' Message has been sent < br > ';

    $_SESSION[' url '] = $_SERVER[' HTTP_REFERER '];
    if (isset($_SESSION[' url '])) {
        if ($_SESSION[' url '] != ' http ://localhost/github/btt/myCart.php')
            $url = $_SESSION['url'];
        else
            $url = "index.php";
    } else {
        $url = "index.php";
    }
    echo $url;

    header("location:" . $url);
    $mail->send();

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}