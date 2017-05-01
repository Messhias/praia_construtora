<?php
$name = $_POST['contact-form-name'];
$email = $_POST['contact-form-email'];
$message = $_POST['contact-form-message'];

$to = 'hithemestarz@gmail.com';
$subject = 'Message From Your Website Contact Form Condio';

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n\n";

$body .= "";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

$headers = 'From: ' .$email . "\r\n";

//$headers = 'From: noreply@domain.com' . "\r\n";

//$body .= "";
//$body .= "Email: ";
//$body .= $email;
//$body .= "\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mail($to, $subject, $body, $headers);
echo '<span id="valid">Your Email was sent!</span>';
}else{
echo '<span id="invalid">Your message cannot be sent.</span>';
}
