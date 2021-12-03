<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: Name: $name \n Email: $email \n Phone: $phone \n Subject: $subject \n Message: $message";
$recipient = "dawanse.santosh@gmail.com";
$subject = "Enquiry Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>