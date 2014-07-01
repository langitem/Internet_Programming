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
	
	// if there are errors, terminate the script:
	if ($inputContainsErrors == true) {
		die();
	}
	
	// if it makes it this far, then there were no errors in the user input
	
	// connect to the database:
	$hostname = 'laureatestudentserver.com';
	$username = 'laureate_IN61';
	$password = 'mXdbsUHm0Kam';
	// $link = mysql_connect("laureatestudentserver.com", "laureate_IN61", "mXdbsUHm0Kam");
	$dbc = new PDO($hostname, $username, $password);
	if (!dbc) {
		die ('Could not connect: ' . mysql_error());
	}
	
	
	// open laureate_IN61 database:
	//$db_selected = mysql_select_db("laureate_IN61", $link);
	//if (!$db_selected) {
	//	die ("Could not open laureate_IN61 database: " . mysql_error());
	//}
	
	
	// insert input into the contacts table:
	$sqlQuery = "INSERT INTO contacts ". "(EmailAddress, Name, Message, Recipient)" . "VALUES ('$email', '$name', '$message', '$recipient')"
	$insert_result = $dbc->exec($sqlQuery);
	
	
	// close connection to the database:
	$dbc = null;
	
	
	// send email confirmation to the user:

?>