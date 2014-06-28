<?php include 'Mobile_Detect.php';
/* The above line of code will import all the code, particularly the methods (functions), from Mobile_Detect.php  */ 
$detect = new Mobile_Detect;
/* Creates a new instance of the Mobile_Detect object, which we shall call $detect. It contains all the User Agent information sent by the user's browser to the Web server */
if ($detect->isMobile() && !$detect->isTablet())
/* If it is a mobile device and it is not (!) a tablet */ 
{           
   if($detect->isAndroidOS())
   {
   header("Location: android.php");
   /* If this is an Android device, send the file android.php to the user's browser. Here the file is assumed to be in the same directory as this program. Because of the previous if statement the device should not be an Android tablet */
   exit;
   /* Exit the program. This tells the program not to execute any more code */
   }
   elseif($detect->isiPhone())
   {
   header("Location: iphone.php");
   exit;
   }
   elseif($detect->isBlackBerry())
   {
   header("Location: blackberry.php");
   exit;
   }
   else
   {
   header("Location: unidentifiedPhone.php");
   /* If the device is not an Android or iPhone or Blackberry. php-mobile-detect provides other methods (functions) to test for further devices if required */
   exit;
   }
}    
else
/* The code below will execute if this is not a mobile phone */
{
header("Location: notphone.php");
exit;
}     
?>
