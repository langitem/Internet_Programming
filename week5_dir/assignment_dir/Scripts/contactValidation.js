/*
 * JavaScript file for validating input received from the About Us web page
 * Author: Emanuel Langit
 * Date: 18 June 2014
 * Version 0.1
 */

function validateForm() {
	var errorFree = true; // will be set to false if errors are found in the user input
	var errorMessage = "";
	
	// array to contain error messages
	var errorMessageArray = [];

	/*
	 * Following was modeled after W3Schools example:
	 * URL: http://www.w3schools.com/js/js_form_validation.asp
	 */
	var emailAddress = document.forms["contactForm"]["email"].value;
	var atPosition = emailAddress.indexOf("@"); //indexOf function returns the position of the argument given.
	var dotPosition = emailAddress.lastIndexOf("."); // lastIndexOf function returns the position of the last occurrence
	
	// validate name
	if (document.forms.contactForm.name.value == "") {
		errorFree = false;
		//errorMessage += "Name is missing.\n";
		errorMessageArray.push("Name is missing.");
		document.getElementById("name").style.borderColor = "red";
		// alert ("Please enter your name!");
		//return false;
	}
	
	/*
	 * validate email address:
	 * if "@" is the second character
	 * OR the "." in the domain name is not at least 2 characters after "@"
	 * OR the email address is shorter than the last "." position + 2
	 * Modeled after W3Schools example:
	 * http://www.w3schools.com/js/js_form_validation.asp
	 */
	if ((atPosition < 1) || (dotPosition < atPosition + 2) || (dotPosition + 2 > emailAddress.length)) {
		errorFree = false;
		//errorMessage += "Invalid email address.\n";
		errorMessageArray.push("Invalid email address.");
		document.getElementById("email").style.borderColor = "red"; // border color of the textbox will be changed to help the user.
		// alert ("Enter a valid email address!");
		//return false;
	}
	
	// validate message
	if (document.forms.contactForm.message.value == "") {
		errorFree = false;
		//errorMessage += "Blank message field\n";
		errorMessageArray.push("Blank message field.");
		document.getElementById("message").style.borderColor = "red";
		// alert("Please enter a message!");
		//return false;
	}

	// alert the user if their submission was successful or not:
	if (errorFree) {
		//alert(errorFree);
		alert ("Thank you for your message!\nA confirmation email will be sent to: " + emailAddress + " \nWe will will contact you shortly.");
	} else {
		// traverse errorMessageArray and add it to the error message
		// that will be displayed in the alert.
		for (var i=0; i < errorMessageArray.length; ++i) {
			errorMessage += errorMessageArray[i] + "\n";
		}
		
		alert ("Please correct the following errors:\n" + errorMessage);
		
		return false;
	}
	
	
} // end of validateForm function
