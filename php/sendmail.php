<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$success = "";

if($email and $message){
	header("Location: ../index.php#contact"); /* Redirect browser */
	mail ("pamela@gluss.com", "Website Contact Form Mail", $message, "From: $email");
	
	
	
	
} else {
	header("Location: ../index.php#contact"); /* Redirect browser */
	$success = "Fuck you";
	
	}
	
?>