function onloadWelcome() {
alert ("Welcome to this file demonstrating examples of JavaScript event programming.");
}

function onchangeselectMessage() {
var favouritecolour = document.getElementById("favcolour").value;
if (favouritecolour !== "Red") /* When checking to see if two strings are equal, it is more reliable to use === (strict equality) or !== for checking if they are not equal. */
   { 
   alert ("Thank you for not choosing red.");
   }
}

function onblurMessage() {
var firstname = document.getElementById("firstName").value;
if (firstname !== "") /* If the firstName field is not blank (empty) */ 
   {
   alert ("It is about time you got round to filling in this field.");
   }
}

function onsubmitMessage() {
var favcolour = document.getElementById("favcolour").value;
var firstname = document.getElementById("firstName").value;
var secondname = document.getElementById("secondName").value; 
alert ("Your favourite colour is " + favcolour + ". Your name is " + firstname + " " + secondname + ".");
}

function capturekeyTap(evt) {
keyTapped = String.fromCharCode(evt.which);
/* The variable "which" is part of the JavaScript language and it is used to capture the numeric value of the keyboard key that has been pressed
(usually a unicode number). The JavaScript function String.fromCharCode converts this numeric value into the letter that was pressed.
This is reliable for letters of the alphabet and numbers not typed using the numeric keypad. Browser support might be patchy. Try Chrome or Safari. This function uses a parameter called evt (more about parameters in Week 4).
The event that has been captured (in this case the key that was tapped) has been passed to this function. */ 
alert ("You just typed the letter " + keyTapped);
}

function dangerMessage() {
document.getElementById("dangerButton").style.background ="#ff0000";
document.getElementById("dangerButton").value = "Danger ! Warning !";
}

function normalMessage() {
document.getElementById("dangerButton").style.background ="";
document.getElementById("dangerButton").value = "Do Not Click !";
}

