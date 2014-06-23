<!DOCTYPE html>
<html>

	<head>
		<title> PHP Filter Results </title>
		<meta charset="utf-8" />
		<link href="style1.css" type="text/css" rel="stylesheet" />
	</head>
	
	<h1> Demonstrating PHP Filters </h1>
	
	<?php
		$options = array("options"=> array("min_range"=>21, "max_range"=>100));
		$validSpeed = filter_input(INPUT_POST, "speed", FILTER_VALIDATE_FLOAT);
		/* PHP will accept an integer as a valid floating point number because it can be easily converted */
		$validAge = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT, $options);
		/* PHP will not accept a floating point number as a valid integer */
		$validEmail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

		if($validSpeed) {
			echo("<h2>Your average speed was expressed as a valid floating point number.</h2>");
		} else {
			echo("<h2>Error: your average speed was not expressed as a valid floating point number.</h2>");
		}
		if($validAge) {
			echo("<h2>Your age was expressed as a valid integer.</h2>");
		} else {
			echo("<h2>Error: your age was not expressed as a valid integer <br /> or it is outside an acceptable range.</h2>");
		}
		if($validEmail) {
			echo("<h2>Your email address was in a valid format.</h2>");
		} else {
			echo("<h2>Error: your email address was not in a valid format.</h2>");
		}
	?>
	
	</body>
</html>
