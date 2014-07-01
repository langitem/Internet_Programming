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
	
	
	// determine if message exists:
	
	
	
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
	$sqlQuery = "INSERT INTO contacts (EmailAddress, Name, Message, Recipient) VALUES ('emanuel@mail.com', '$name', 'test message', 'Emanuel')";
	$insert_result = $dbc->exec($sqlQuery);
	
	$dbc = null;

?>
