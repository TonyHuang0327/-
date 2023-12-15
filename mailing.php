<?php
session_start();
$email=$_POST["email"];
$_SESSION['usrEmail'] = $email;
//$uName=$_POST["uName"];
//$message=$_POST["message"];
//$message=nl2br($message);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//$mail->Charset='UTF-8';

try {
    //Server settings
    $mail->SMTPDebug = 2;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1093310@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = 'tony20020327';                               //SMTP password
    $mail->SMTPSecure = "ssl";//PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('a1093310@mail.nuk.edu.tw', '寸頭胖子');
    $mail->addAddress($email,'guest');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "=?utf-8?B?" . base64_encode("確認更改") . "?=";
    //$message.$uName."您傳送的訊息如下:<br>.$message.";
    $mail->Body    = "<a href='localhost/修改密碼.php'>請點我</a>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>