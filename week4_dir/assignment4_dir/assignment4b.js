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

	var vowels = textInput.match(/[AEIOUaeiou]/g);
	var aString = textInput.match(/[Aa]/g);
	var eString = textInput.match(/[Ee]/g);
	var iString = textInput.match(/[Ii]/g);
	var oString = textInput.match(/[Oo]/g);
	var uString = textInput.match(/[Uu]/g);
	
	/*
	 * If there are no occurrences of each of the following,
	 * then set the value zero, else, count the lengths
	 */
	var numberOfVowels = vowels != null ? vowels.length : 0;
	var numberOfAs = vowels != null ? aString.length : 0;
	var numberOfEs = eString != null ? eString.length : 0;	
	var numberOfIs = iString != null ? iString.length : 0;
	var numberOfOs = oString != null ? oString.length : 0;
	var numberOfUs = uString != null ? uString.length : 0;
	

	document.getElementById("numberOfVowels").value = numberOfVowels;
	document.getElementById("numberOfAs").value = numberOfAs;
	document.getElementById("numberOfEs").value = numberOfEs;
	document.getElementById("numberOfIs").value = numberOfIs;
	document.getElementById("numberOfOs").value = numberOfOs;
	document.getElementById("numberOfUs").value = numberOfUs;

}
