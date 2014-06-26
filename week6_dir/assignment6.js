/*
JavaScript file for validating input received
for assignment 6
*/

function validateReferenceNumber() {
	var refNum = document.getElementById("refNo").value;
	//var len = refNum.length;
	if (isNaN(refNum)) {
		alert("Please enter numbers only");
		return false;
	}
}

function validateCustomerRating() {
	var customerRating;

}