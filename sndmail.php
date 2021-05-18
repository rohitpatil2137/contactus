<?php

if(isset($_POST['email'])) {

$email_to = "rohitpatil2137@gmail.com.";
$email_subject = "Co-working Space Enquiry";	


$name = $_POST['name']; // required
$email = $_POST['email']; // required
$contact = $_POST['mobile']; //required
$location = $_POST['msg']; //required
$error_message = "error";
//For Name


function clean_string($string) {
 $bad = array("content-type","bcc:","to:","cc:","href");
 return str_replace($bad,"",$string);
}
$email_message .= "name: ".clean_string($name)."\n";
$email_message .= "email: ".clean_string($email)."\n";
$email_message .= "mobile: ".clean_string($contact)."\n";
$email_message .= "Message: ".clean_string($location)."\n";
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
}
?>