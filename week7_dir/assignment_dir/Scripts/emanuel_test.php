<?php

	// define variables and set to empty values (taken from http://www.w3schools.com/php/php_form_validation.asp)
	$name = $email = $message = $recipient = "";
	
	// variable used to determine if invalid input are received from the user.
	$inputContainsErrors = false;
	
	// determine if name contains letters:
	if (preg_match("/^[A-Za-z]/", $_POST[name])) {
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
	
	// determine if message contains letters:
	if (preg_match("/^[A-Za-z]/", $_POST[name])) {
		$message = $_POST[message];
	} else {
		$inputContainsErrors = true;
	}
	
	// get recipient:
	$recipient = $_POST[recipient];
	
	
	// if there are errors, terminate the script:
	if ($inputContainsErrors == true) {
		die();
	}
		
	// if it makes it this far, then there were no errors in the user input

	// connect to the database:
	$dsn = 'mysql:host=laureatestudentserver.com;dbname=laureate_IN61';
	$hostname = 'laureatestudentserver.com';
	$username = 'laureate_IN61';
	$password = 'mXdbsUHm0Kam';
	$dbc = new PDO($dsn, $username, $password);
	
	// construct sql statement and execute it:
	$sqlQuery = "INSERT INTO Messages_from_aboutUs (EmailAddress, Name, Message, Recipient) VALUES ('$email', '$name', '$message', '$recipient')";
	$insert_result = $dbc->exec($sqlQuery);
	
	$dbc = null;
	
	
	// send email confirmation to the user:
	$to = $email;
	$from = 'restaurant@thedeltal.com';
	$subject = 'Confirmation of inquiry received';
	$messageToUser = "Thank you for your inquiry. We will respond in a timely manner.\n\n".
						"Regards\n\nThe DelTal Restaurant Staff\n\n\n".
						"This is an automated response; Please do not reply";
	mail($to, $subject, $messageToUser, "From: $from\n");

?>
