function analyzeText() {
	var textInput = document.getElementById("textInputFromUser").value;
	if ((textInput == "") || (textInput == null)) {
		alert("Please enter text");
	} else {
		//alert("you entered: " + textInput);
		countNumVowels(textInput);
	}
} // end of analyzeText function

function countNumVowels(textInput) {
	//alert("you entered: " + textInput);
	var vowels = textInput.match(/[AEIOUaeiou]/g);
	alert("The Number of vowels in " + textInput + " is " + vowels.length);
}
