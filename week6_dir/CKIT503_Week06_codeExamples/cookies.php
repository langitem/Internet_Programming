<?php
if (isset($_COOKIE["login_date"])) {
$lastlogindate = $_COOKIE["login_date"];
$lastlogintime = $_COOKIE["login_time"];
$lastclass = $_COOKIE["login_class"];
}
setcookie ("login_date", date("D d M Y"),time()+86400*30); /* expire in 30 days */
setcookie ("login_time", date("g:i A"),time()+86400*30); /* expire in 30 days */
setcookie ("login_class", $_POST["class"] ,time()+86400*30); /* expire in 30 days */
?>
<!DOCTYPE html>
<html>
<head>
<title>Entry Page</title>
<meta charset="utf-8" />
</head>
<body>
<p>Welcome to the main entry page for the Flamingo On-line purchasing system.
<p>Please be aware that this XHTML page will create a cookie to be stored in your Web Browser, but it only
records your IN class number and the date of the last time you came through this page.
<?php
$name = $_POST["firstname"] . " " . $_POST["lastname"];
echo("<p>Welcome to the entry page " . $name);
echo("<p>.Your IN class is " . $_POST["class"]);
if (isset($lastlogindate)) {
echo("<p>You last logged in at " . $lastlogintime . " on " . $lastlogindate);
echo("<br>You also last logged in with the class " . $lastclass);
}
else {
echo("You either haven't logged in before, or haven't logged in for more than 30 days");
}
?>
</body>
</html>
