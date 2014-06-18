//Three main JavaScripts are included in the file below.
/*The first script is done for client side validation. It will check that the First Name, Last Name, Email and Text area are filled inand if not will generate an error message. If they are filled in it will generate a Thank you Message alert for the user
*/
function menuvalidate() {
    var errormessage = "";
    if (document.forms.fmValidation.firstname.value == "") {        
	errormessage += "Please provide us with your First Name! \n";
        document.getElementById('firstname').style.borderColor = "red";
    }
    if (document.forms.fmValidation.lastname.value == "") {
        errormessage += "Please provide us with your Last Name! \n";
        document.getElementById('lastname').style.borderColor = "red";
    }
    if (document.forms.fmValidation.emailaddress.value == "") {
        errormessage += "Please provide us with your Email Address! \n";
        document.getElementById('emailaddress').style.borderColor = "red";
    }
    if (document.forms.fmValidation.fmtxtarea.value == "") {
        errormessage += "We want to hear from you! Please provide us comments/suggestions for menu options and how to improve! \n";        document.getElementById('fmtxtarea').style.borderColor = "red";    }
    if (errormessage != "") {
        alert(errormessage);
        return false;
    }    else {
		alert("Thank you so much for your submission! We will review your suggestions/comments and contact you shortly!");
    }
}

//This script controls a button on the HTML page that displays the current Date and Time for the user when clicked.
function displayDate() {
    document.getElementById("dateandtime").innerHTML = Date();
}
//This script is used to manipulate data in a text box. It will display an initial message and change the message when the user hovers over the box on the HTML page.
function mOver(obj) {
    obj.innerHTML = "Thank You For Being A Loyal Customer!"
}
function mOut(obj) {
    obj.innerHTML = "Mouse Over For A Special Message From DELTAL Subs!"
}
