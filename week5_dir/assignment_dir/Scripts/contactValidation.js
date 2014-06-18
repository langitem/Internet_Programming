/*
 * JavaScript file for validating input received from the About Us web page
 * Author: Emanuel Langit
 * Date: 18 June 2014
 */

function validateForm() {
	//alert("Congratulations! You entered the fcn!");
	var emailAddress = document.forms["contactForm"]["email"].value;
	var atPosition = emailAddress.indexOf("@");
	var dotPosition = emailAddress.lastIndexOf(".");
	
	if (document.forms.contactForm.name.value == "") {
		alert ("Please enter your name!");
		return false;
	}
	
	if ((atPosition < 1) || (dotPosition < atPosition + 2) || (dotPosition + 2 > emailAddress.length)) {
		alert ("Please enter a valid email address!");
		return false;
	}
	
}

