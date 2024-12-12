<?php
$name = htmlspecialchars($_POST['name']);
$visitor_email = htmlspecialchars($_POST['email']);
$place = htmlspecialchars($_POST['place']);
$worker = htmlspecialchars($_POST['worker']);
$order = htmlspecialchars($_POST['Order']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$email_from = 'info@yourwebsite.com';

$email_subject = "New Form Submission: $subject";

$email_body = "User Name: $name.\n" .
              "User Email: $visitor_email.\n" .
              "Place: $place.\n" .
              "Worker: $worker.\n" .
              "Order: $order.\n" .
              "Subject: $subject.\n" .
              "User Message: $message.\n";


$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";

if (mail($to, $email_subject, $email_body, $headers)) {
    header("Location: order.html");
} else {
    header("Location: error.html");
}
exit;
?>
