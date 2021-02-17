<?php


// $to = "jeel.addweb@gmail.com";
// $subject = "My subject";
// $txt = "Hello world!";

// // $headers = "From: mirali.addweb@gmail.com" . "\r\n" .
// $headers = 'From: mirali.addweb@gmail.com' . "\r\n" .
//     'Reply-To: mirali.addweb@gmail.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();
// // $headers  = 'MIME-Version: 1.0' . "\r\n";
// // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// // "CC: mirali.addweb@gmail.com";

// $a=mail($to,$subject,$txt,$headers);
// var_dump($a);
// // if(mail($to, $subject, $txt, $headers)){
// //     echo 'Your mail has been sent successfully.';
// // } else{
// //     echo 'Unable to send email. Please try again.';
// // }
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   
$mail->Host = 'smtp.gmail.com';             
$mail->SMTPAuth = true;                              
$mail->Username = 'miralipansara06@gmail.com';              
$mail->Password = 'mirali4729#';                          
$mail->SMTPSecure = 'tls';                         
$mail->Port = 587;                                   

$mail->From = 'miralipansara06@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('miralipansara06@gmail.com');             


$mail->isHTML(true);                                 

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// var_dump($mail);
if(!$mail->send()) {
    echo 'Message could not be sent.';
    // var_dump($mail);
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


?>
