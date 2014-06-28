function storeEmail() {
var email = document.getElementById("email").value;
localStorage.setItem("emailaddress", email);
/* "emailaddress" is the identifier/variable name we shall use in local storage */
document.getElementById("email").value = "";
}

function retrieveEmail() {
var storedEmail = localStorage.getItem("emailaddress");
/* We retrieve the email address from local storage using the identifier/variable name "emailaddress" */
alert("The stored email address is " + storedEmail);
}

function deleteEmail() {
localStorage.removeItem("emailaddress");
alert("Now click the button marked Retrieve the email address to check that it has been deleted.");
}