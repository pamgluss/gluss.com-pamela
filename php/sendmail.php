<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$formOutcome = "TEST";


if($email and $message){
	mail ("pamela@gluss.com", "Website Contact Form Mail", $message, "From: $email");
	
	header("Location: ../index.html#contact"); /* Redirect browser */
	$formOutcome = "Thanks! I'll be in touch soon!";
	
	
} else {
	header("Location: ../index.html#contact"); /* Redirect browser */
	$formOutcome = "I'm sorry, try including an email address and message.";
	
	
	}
	
?>