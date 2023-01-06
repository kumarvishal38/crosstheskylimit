<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$class = $_POST['class'];
$phone_number = $_POST['number'];
$quiery = $_POST['quiery'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name. \n".
                "User Email: $visitor_email. \n".
                "Class: $class. \n".
                "User Phone Number: $phone_number. \n".
                "User Quiery: $quiery. \n".;
                
$to = 'imailtokumarvishal@gmail.com';

$headers = "From: $email_from \r \n";

$headers . = "Reply-To: $visitor_email \r\n";


mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html");

?>