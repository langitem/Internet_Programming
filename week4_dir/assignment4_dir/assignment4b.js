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
	 * If string lengths are not null, set value to the length of the string
	 * else, set them to zero
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
	
	determineVowelWinner(numberOfAs, numberOfEs, numberOfIs, numberOfOs, numberOfUs);

} // end of countNumVowels function

function determineVowelWinner(numberOfAs, numberOfEs, numberOfIs, numberOfOs, numberOfUs) {
	
	var aeiouArray = new Array(5);
	aeiouArray = [numberOfAs, numberOfEs, numberOfIs, numberOfOs, numberOfUs];
	var largestTotal = Math.max.apply(Math, aeiouArray); // find largest value
	
	var winnersArray = []; // will hold indices of aeiouArray whose value is equal to largestTotal
	
	var biggestSoFar = 0;
	var currentWinner;
	
	for (var i=0; i < aeiouArray.length; ++i) {
		currentTotal = aeiouArray[i];
		
		if (currentTotal == largestTotal) {
			winnersArray.push(i);
		}

	} // end of for loop
	
	var tmpString = "";
	for (var i = 0; i < winnersArray.length; ++i ) {
		tmpString += winnersArray[i] + " ";
	} // end of for loop
	alert(tmpString);
	
} // end of determineVowelWinner function