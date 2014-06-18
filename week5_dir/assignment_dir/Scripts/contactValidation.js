/*
 * JavaScript file for validating input received from the About Us web page
 * Author: Emanuel Langit
 * Date: 18 June 2014
 * Version 0.1
 */

function validateForm() {
	//var errorFree = true;
	var errorMessage = "";

	/*
	 * Following was modeled after W3Schools:
	 * URL: http://www.w3schools.com/js/js_form_validation.asp
	 * Explain how the array works.
	 */
	var emailAddress = document.forms["contactForm"]["email"].value;
	var atPosition = emailAddress.indexOf("@");
	var dotPosition = emailAddress.lastIndexOf(".");
	
	// validate name
	if (document.forms.contactForm.name.value == "") {
		//errorFree = false;
		errorMessage += "Name is missing.\n";
		document.getElementById("name").style.borderColor = "red";
		// alert ("Please enter your name!");
		//return false;
	}
	
	// validate email address
	if ((atPosition < 1) || (dotPosition < atPosition + 2) || (dotPosition + 2 > emailAddress.length)) {
		//errorFree = false;
		errorMessage += "Invalid email address.\n";
		document.getElementById("email").style.borderColor = "red";
		// alert ("Enter a valid email address!");
		//return false;
	}
	
	// validate message
	if (document.forms.contactForm.message.value == "") {
		//errorFree = false;
		errorMessage += "Blank message field\n";
		document.getElementById("message").style.borderColor = "red";
		// alert("Please enter a message!");
		//return false;
	}
	
	if (errorMessage == "") {
		alert ("Thank you for your message! Will will contact you shortly");
	} else {
		alert ("Please correct the following errors:\n" + errorMessage);
		return false;
	}
	
	
}

/*
 * References:
 * 1. 
*/
