<?php
	$refNo = $_POST['refNo'];
	$name = $_POST['name']; 
	$deviceType = $_POST['deviceType']; 
	$colour = $_POST['colour']; 
	$stockLevel = $_POST['stockLevel']; 
	$salesThisMonth = $_POST['salesThisMonth'];
	$customerRating = $_POST['customerRating'];
	/* The above code retrieves data from the HTML form contained in updateDevice1.php */      
	$dsn = 'mysql:host=laureatestudentserver.com;dbname=laureate_mobiles';
	$username = 'laureate_xxxx';
	$password = 'yyyyy';
	$dbc = new PDO($dsn, $username, $password);
	 
	$sqlQuery = "UPDATE devices SET name = '$name', deviceType = '$deviceType', colour = '$colour', stockLevel = $stockLevel, salesThisMonth = $salesThisMonth, customerRating = $customerRating  WHERE refNo = '$refNo'"; 
	/* The SQL says "Update the devices table by setting each field to the contents of the HTML form in updateDevice1.php". Only where the user changed something will any difference be seen */
	$update_result = $dbc->exec($sqlQuery);
	/* Execute the SQL query and store the number of rows that were changed in $update_result */ 
	$dbc = null;
	
	if($update_result != 0)
	/* If at least one row in the database was changed */
	{
		echo("<h3>The device record was updated successfully</h3>");
	}
	else
	{
		echo("<h3>The update was unsuccessful</h3>");
	}
	echo("<p><a href='main.html'>Continue</a></p>");
?>



