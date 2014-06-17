//Author: Albert O. Lartey || Week 5 Group Hand-in Assignment Project

//JavaScript funtion which checks and alert user if ALL of either text box or textarea boxes is left blank.
function validate() {

    var errormessage = "";

    if (document.forms.fmValidation.fname.value == "") {
        errormessage += "Please fillout your first name \n";
        document.getElementById('fname').style.borderColor = "red";
    }
    if (document.forms.fmValidation.lname.value == "") {
        errormessage += "Please fillout your last name \n";
        document.getElementById('lname').style.borderColor = "red";
    }
    if (document.forms.fmValidation.emailaddress.value == "") {
        errormessage += "Please fillout your email address \n";
        document.getElementById('emailaddress').style.borderColor = "red";
    }
    if (document.forms.fmValidation.conf_emailaddress.value == "") {
        errormessage += "Please confirm your email address \n";
        document.getElementById('conf_emailaddress').style.borderColor = "red";
    }
    if (document.forms.fmValidation.fmPassword.value == "") {
        errormessage += "Please fillout your password section \n";
        document.getElementById('fmPassword').style.borderColor = "red";
    }
    if (errormessage != "") {
        alert(errormessage);
        return false;
    }
    else {

        thanksYouArray();
    }
}

//Author: Albert O. Lartey
//Page: Register.html & ThankYou.html
function Thanks() {

    var A = 0;  //initializing vowels components and setting them to zero.
    var qrStr = window.location.href;
    var spQrStr = qrStr.substring(1);
    var arrQrStr = new Array();
    var arr = spQrStr.split('&');
  
    for (var i = 0; i < arr.length; i++) {
        var index = arr[i].indexOf('=');

        var key = arr[i].substring(0, index);
        var val = arr[i].substring(index + 1);

        if (i == 0) {
            A = val;
            var find = "%20";
            A = "Hello "+A.replace(find, " ")+", thank you for registering with the DelTal Sub Shop Restaurant!";
            document.getElementById("lblthanks").innerText = A;          
        }
    }    
}

//Author: Albert O. Lartey
//Page: Register.html & ThankYou.html
//The the concept of an array to say thanks new customers for registering with the DelTal Sub Shop Restaurant 
function thanksYouArray() {

    var people = new Array(document.forms.fmValidation.fname.value, document.forms.fmValidation.lname.value);

    var A = people[0] + " " + people[1];
    //+ ", thank you for registering with the DelTal Sub Shop Restaurant!";

    var url = "ThankYou.html?A=" + A ;

    window.open(url, 'popUpWindow', 'center=0,height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');  
}

//Author: Albert O. Lartey
//Page: Register.html
//Using document object models to change the backgroud, border color, border radious and also setting text alignment to center position.
function change() {
    var a = prompt("Please provide your favorite meal", 0);
    var b = document.getElementById("txtchange").innerHTML = a;

    document.getElementById("txtchange").style.background = "PaleGreen";
    document.getElementById("txtchange").style.borderColor = "red";
    document.getElementById("txtchange").style.borderRadius = "40px 40px 40px 40px";
    document.getElementById("txtchange").style.textAlign = "center";
}