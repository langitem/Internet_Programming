<!DOCTYPE html>
<html>
<head>
<title> Demonstrating Shadows </title>
<meta charset="utf-8" />
<link href="style1.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php
$selectedButton = $_POST["SiteQuality"];
if ($selectedButton == "5")
{
echo("<h2>Your reply was: Strongly Agree</h2>");
}
elseif ($selectedButton == "4")
{
echo("<h2>Your reply was: Agree</h2>");
}
elseif ($selectedButton == "3")
{
echo("<h2>Your reply was: Neutral/Undecided</h2>");
}
elseif ($selectedButton == "2")
{
echo("<h2>Your reply was: Disagree</h2>");
}
elseif ($selectedButton == "1")
{
echo("<h2>Your reply was: Strongly Disagree</h2>");
}
else 
{
echo("<h2>You did not answer the question</h2>");
}
?>

</body>
</html>
