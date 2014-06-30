<?php

	// define variables and set to empty values (taken from http://www.w3schools.com/php/php_form_validation.asp)
	$name = $email = $message = $recipient = "";
	
	// variable used to determine if invalid input are received from the user.
	$inputContainsErrors = false;

	// determine if name contains letters:
	if (preg_match("/[^A-Za-z]*$/", $_POST[name])) {
		$name = $_POST[name];
	} else {
		$inputContainsErrors = true;
	}
	
	// determine if email address is valid:
	if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST[email])) { //regex taken from: http://www.w3schools.com/php/php_form_url_email.asp
		$email = $_POST[email];
	} else {
		$inputContainsErrors = true;
	}
	
	
	// determine if message exists:
	if (preg_match("/[A-Za-z]/", $_POST[message])) {
		$message = $_POST[message];
	} else {
		$inputContainsErrors = true;
	}

?>