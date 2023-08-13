<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$massage = $_POST['massage'];

$email_from = 'info@https://leteipan.github.io/Portfolio-website-/'

$email_subject = 'New form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "number:$number.\n".
              "User Massage: $massage.\n";
              
$to = 'denisleteipan45@gmail.com'

$headers = "From: $email_from\r\n";
$headers. ="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("location:index.html");
?>