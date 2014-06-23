<!DOCTYPE html>
<html>
	<head>
	<title>Is the Colour in the File ? </title>
	<meta charset="utf-8" />
	</head>
	<body>    	
		<h1>Guessing the Colour</h1>
		<?php
			$colour = $_POST["colour"];
			$filecolour = "";
			$colourfound = false;
			$colour = trim($colour); // Strip out spaces, carriage returns, line feeds, tabs from the beginning and end of the string
			$colour = strtoupper($colour);  //Name of colour chosen by the user is converted to upper case
			$file = fopen ("colours.txt", "r");
			 
			while(!feof($file))
			{				   
				$filecolour = fgets($file);
				$filecolour = trim($filecolour); // Strip out spaces, carriage returns, line feeds, tabs from the beginning and end of the string
				$filecolour = strtoupper($filecolour);  // Name of colour in the file is converted to upper case 
				if ($colour == $filecolour)   // Comparison is now not case sensitive
				{
					$colourfound = true;
				}  // End of if statement
			}  // End of while loop
			if ($colourfound)
			{
				echo ("The colour " . $colour . " has been found in the file.");
			}
			else
			{
				echo ("The colour " . $colour . " is not in the file. Please guess again.");
			} // End of if statement
			echo ("<p><a href='colours.html'>Continue</a></p>");
			fclose($file);
		?>
	</body>
</html>
