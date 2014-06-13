<?php
if (isset($_COOKIE["login_date"])) {
/* If a cookie has already been set on your computer */
$lastlogindate = $_COOKIE["login_date"];
$lastlogintime = $_COOKIE["login_time"];
$lastclass = $_COOKIE["login_class"];
/* The details in the cookies will tell us about the last time you used the cookies.html page */
}
setcookie ("login_date", date("D d M Y"),time()+86400*30); /* expire in 30 days (expressed as seconds) */
setcookie ("login_time", date("g:i A"),time()+86400*30); /* expire in 30 days */
setcookie ("login_class", $_POST["class"] ,time()+86400*30); /* expire in 30 days */
/* In all cases set cookies about your current situation */
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Cookies</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Welcome to the Cookies Page</h2>
<?php
$name = $_POST["firstname"] . " " . $_POST["lastname"];
$class = $_POST["class"];
/* Retrieve information from the HTML form in cookies.html */
echo("<p>Welcome to the cookies page, " . $name . ".</p>");
echo("<p>Your IN class is " . $class . ".</p>");  
if (isset($lastlogindate)) {
/* If there is a cookie showing the date of your last visit */
echo("<p>You last logged in at " . $lastlogintime . " on " . $lastlogindate . ", Web server time.</p>");
echo("<p>You also last logged in when a member of the IN class " . $lastclass . ".</p>");
}
else {
echo("<p>You either haven't logged in before, or haven't logged in for more than 30 days.</p>");
}
?>
</body>
</html>
