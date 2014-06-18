/*
 * JavaScript file for validating input received from the About Us web page
 * Author: Emanuel Langit
 * Date: 18 June 2014
 * Version 0.1
 */

function validateForm() {
	var errorFree = true;

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
		errorFree = false;
		alert ("Please enter your name!");
		return false;
	}
	
	// validate email address
	if ((atPosition < 1) || (dotPosition < atPosition + 2) || (dotPosition + 2 > emailAddress.length)) {
		errorFree = false;
		alert ("Please enter a valid email address!");
		return false;
	}
	
	// validate message
	if (document.forms.contactForm.message.value == "") {
		errorFree = false;
		alert("Please enter a message!");
		return false;
	}
	
	if (errorFree) {
		alert ("Thank you for your message! Will will contact you shortly");
	}
	
}

/*
 * References:
 * 1. 
*/
