

<?php
	// Copied from updateDevice1.php and modified accordingly
	
	$refNo = $_POST['refNo']; 
	// $dsn = 'mysql:host=laureatestudentserver.com;dbname=laureate_mobiles';
	// $username = 'laureate_xxxx';
	// $password = 'yyyyy';
	// $dbc = new PDO($dsn, $username, $password);
	include("../../connection.php");
	
	$query = "SELECT * FROM devices WHERE refNo = '$refNo'";
	
	$results = $dbc->query($query); 
	$rows = $results->rowCount();  
	
	if ($rows > 0) {
	      echo("<p> This reference number already exists" . $refNo . " in the devices table!</p>");
	      // Add code to display existing record:
	      
	      
	      
	      echo("<p><a href='main.html'>Continue</a>");
	} else {
		$deviceToUpdate = $results->fetch();      
		$name = $deviceToUpdate['name'];
		$deviceType = $deviceToUpdate['deviceType'];
		$colour = $deviceToUpdate['colour'];
		$stockLevel = $deviceToUpdate['stockLevel'];
		$salesThisMonth = $deviceToUpdate['salesThisMonth'];
		$customerRating = $deviceToUpdate['customerRating'];
?>
		
		<!DOCTYPE html>
		<html>
			<head>
			<title> Update a Single Device's Details  </title>
			<meta charset="utf-8" />
			</head>
			<body>
			
				<p>
				<h2>Device Update Form</h2>
				</p>
				      
				<form name="updateForm" action="updateDevice2.php"method="POST">
				
					<p>Reference Number <?php echo ($refNo) ?></p>
					
					Name <input type="text" name="name" size="20 "maxlength = "20" value="<?php echo($name); ?>">
					Device Type <input type="text" name="deviceType" size="10" maxlength = "10" value="<?php echo($deviceType); ?>">
					Colour <input type="text" name="colour" size="10" maxlength = "10" value="<?php echo($colour); ?>">
					Stock Level <input type="text" name="stockLevel" size="4" maxlength = "4" value="<?php echo($stockLevel); ?>">
					Sales This Month <input type="text" name="salesThisMonth" size="4" maxlength = "4" value="<?php echo($salesThisMonth); ?>">
					Customer Rating <input type="text" name="customerRating" size="1" maxlength = "1" value="<?php echo($customerRating); ?>">
					<input type="hidden" name="refNo" value="<?php echo($refNo); ?>">
					<input type=submit value="Submit Update">
				</form>
			</body>
		</html>
<?php
	}
	$dbc = null;
?>
