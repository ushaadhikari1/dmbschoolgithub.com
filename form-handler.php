<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'adhikariusha389@gmail.com';

$email_subject ='New Form Submission';

$_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = 'dev.46015@gmail.com';

$headers ="From : $email_from \r\n";

$headers .= "Reply-To: $visitor-email \r\n";

mail($to,$email_subject,$_body,$headers);

header("Location: contact.html");
?>