<?php
$link = $_GET['link'];
$to      = 'viann.montalba019@gmail.com';
$subject = 'Emergency response';

$link = str_replace('"', "$",$link);
$message = 'please send immediate response to this location
        <a href="https://iambulansya.000webhostapp.com/'.$link.'">link</a>';
$headers = 'From: iambulansya@iambulansya.000webhostapp.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" . "Content-Type: text/html; charset=ISO-8859-1\r\n".
    'X-Mailer: PHP/' . phpversion();
//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
/*
$headers = "From: 'iambulansya@iambulansya.000webhostapp.com'\r\n";
$headers .= "Reply-To: 'webmaster@example.com' \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/

mail($to, $subject, $message, $headers);

/*$fromTitle = "Emergency response";
$emailFrom = 'iambulansya@iambulansya.000webhostapp.com';
$emailTo   = 'moribaleta@gmail.com';

$subject = "Emergency response"; 
$message = '<p>please send immediate response to this location</p>
        <a href="https://iambulansya.000webhostapp.com/'.$link.'">location</a>"';
$random_hash = md5(uniqid(time()));

$header = "From: $fromTitle <$emailFrom>\r\n";
$header .= "Reply-To: ".$emailFrom."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: multipart/mixed; boundary=\"".$random_hash."\"\r\n\r\n";
$header .= "This is token email.\r\n";
$header .= "--".$random_hash."\r\n";
$header .= "Content-type:text/html; charset=UTF-8\r\n";
$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

@mail($emailTo, $subject, $message, $header);   */
?> 