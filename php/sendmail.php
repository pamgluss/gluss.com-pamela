<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];


if($message){
	mail ("pamela@gluss.com", "Website Contact Form Mail", $message, "From: $email");
	}
?>