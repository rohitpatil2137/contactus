<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $mob = trim(strip_tags($_POST['mobile']));
       $sub = trim(strip_tags($_POST['subject']));
       $branch = trim(strip_tags($_POST['preffered-branch']));
       $tsize = trim(strip_tags($_POST['team-size']));
       $message = htmlentities($_POST['msg']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'rohitpatil8600300910@gmail.com';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: form.html');
?>
