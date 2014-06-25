/*
JavaScript file for validating input received
for assignment 6
*/

function validateReferenceNumber() {
	var refNum = document.getElementById("refNo").value;
	//var len = refNum.length;
	alert(refNum);
	if (isNaN(refNum)) {
		alert("Enter numbers only");
		return false;
	} else {
		alert("else");
	}
}

function validateCustomerRating() {
	var customerRating;

}