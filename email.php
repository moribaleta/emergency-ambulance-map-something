<?php
$link = $_GET['link'];
$address = $_GET['address'];
//$to      = 'viann.montalba019@gmail.com';
$to      = $_GET['email'];

$subject = 'Emergency response';

$link = str_replace('"', "$",$link);
$address = str_replace(", ",",",$address);
$message = /*'<h2>iAmbulansya Emergency Message</h2>
            <p>please send immediate response to this location</p>
            <p>address: '.$address.'</p>
            <a href="https://iambulansya.000webhostapp.com/'.$link.'">click to view route</a>';*/
        '<img src="iambulansya.000webhostapp.com/resources/images/background_email.png">
        <h2>iAmbulansya Emergency Alert:</h2>
        <p>Our system detected a vehicular accident at <br> ('.$address.').<br> Please
        send an emergency response unit at the accident area immediately.
        We are sending you this best emergency route for your convenience.
        <br>
        <a href="https://iambulansya.000webhostapp.com/'.$link.'">click to view route</a>
        </p>        
        <p>This is iAmbulansya Medical Emergency Response System, Bringing
        you the help in optimizing your emergency response.</p><p>Thank you.</p>';


$headers = 'From: iambulansya@iambulansya.000webhostapp.com' . "\r\n" .
    'Cc: viann.montalba019@gmail.com\r\n'.
    'Bcc: moribaleta@gmail.com\r\n'.
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