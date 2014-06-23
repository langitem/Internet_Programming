<!DOCTYPE html>
<html>
	<head>
		<title> Checkboxes Processed </title>
		<meta charset="utf-8" />
		<link href="style1.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	
		<?php
			if (isset($_POST["ItemsOwned"]))
			{
				$checkboxArray = $_POST["ItemsOwned"];
				$lengthArray = count($checkboxArray);
				for ($i = 0; $i < $lengthArray; $i++)
				// foreach ($checkboxArray as $key => $value)
				{
					if ($checkboxArray[$i] == "laptop")
					// if ($value == "laptop")
					{
						echo("<h2>You own a laptop</h2>");
					}
					elseif ($checkboxArray[$i] == "blackberry")
					// elseif ($value == "blackberry")
					{
						echo("<h2>You own a Blackberry</h2>");
					}
					elseif ($checkboxArray[$i] == "iphone")
					// elseif ($value == "iphone")
					{
						echo("<h2>You own an iPhone</h2>");
					}
					elseif ($checkboxArray[$i] == "ipad")
					// elseif ($value == "ipad")
					{
						echo("<h2>You own an iPad</h2>");
					}
					elseif ($checkboxArray[$i] == "labrador")
					// elseif ($value == "labrador")
					{
						echo("<h2>You own a Labrador called Donald</h2>");
					} // End of if $checkboxArray[$i] etc
				} // End of for loop
			} // End of if part of if isset
			else // isset is not true
			{
				echo("<h2>No checkboxes were selected</h2>");
			} // End of if isset etc
		?>
	
	</body>
</html>
