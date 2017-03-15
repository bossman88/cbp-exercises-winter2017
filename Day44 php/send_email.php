<?php

require './class.phpmailer.php';
require './class.smtp.php';
require './mail-config.php';

$mail = new PHPMailer();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $config['username'];                 // SMTP username  cbmailsmtp@gmail.com
$mail->Password = $config['password'];                           // SMTP password bootcamp
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('lottery@eurolottery.com', 'Official European lottery');   //2nd parameter   u can put name there t odisplay in email
//$mail->ReplyTo = 


//$mail->addAddress('cbmailsmtp@gmail.com', 'YO OG');
$mail->addAddress('jelenavsr@gmail.com', 'Jelena Vengrevica');




$mail->Subject = 'Congratulations U have won in our lottery';
$mail->Body = 'To get your prize please send sms on +420831949472   with the code  Won1000000';


if (!$mail->send()) {
    echo 'Message not sent';
    echo 'not sent' . $mail->ErrorInfo;
} else {
    echo 'sent';
}