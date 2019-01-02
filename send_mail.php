<?php

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$to = "humayun_ruetcse13@yahoo.com";
$subject = "Portfolio messages";
$body = "This is an automated message. Please don't reply to this mail. \n\n $message";

mail($to, $subject, $body);

echo "Message Sent Successfully !"