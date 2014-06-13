<!DOCTYPE html>
<html>

<head>
<title> The Reply From the PHP Script </title>
<meta charset="utf-8" />
<link href="style1.css" type="text/css" rel="stylesheet" />
</head>

<?php
$firstName = $_POST["firstname"];
/* This retrieves the value typed in the HTML form text box called "firstname" and stores it in a PHP variable */
?>


<h1> Customer Registration Part 2 </h1>
<!-- <p> Welcome, <?php /* echo $firstName */ ?>. Now tell us your surname </p> -->

<?php echo ("<p> Welcome, $firstName. Now tell us your surname </p>"); ?>

<form method = "post" action = "customer2.php">	
<fieldset>
<legend></legend>
<label for="surname">Surname</label><br />
<input name = "surname" id = "surname" type = "text" size = "20" maxlength = "30" /><br />
</fieldset>

<p>
<input type = "submit" name = "submit" value = "Submit" />
<input type = "reset" value = "Clear" />
</p>
</form>

</body>
</html>
