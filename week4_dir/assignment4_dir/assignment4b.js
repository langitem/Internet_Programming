function analyzeText() {
	var textInput = document.getElementById("textInputFromUser").value;
	
	// Set textboxes to white in case it was just run:
	document.getElementById("numberOfAs").style.background = "white";
	document.getElementById("numberOfEs").style.background = "white";
	document.getElementById("numberOfIs").style.background = "white";
	document.getElementById("numberOfOs").style.background = "white";
	document.getElementById("numberOfUs").style.background = "white";
	
	/*
	 * The following validates if text was entered by the user. If not, then
	 * alert the user. Else, pass the text that was entered to the
	 * countNumVowels function.
	 */
	if ((textInput == "") || (textInput == null)) {
		alert("Please enter text");
	} else {
		//alert("you entered: " + textInput);
		countNumVowels(textInput);
	}
} // end of analyzeText function

function countNumVowels(textInput) {

	/*
	 * The following variable assignment use the match method to find
	 * occurrences of regular expression. These occurrences are stored in
	 * the corresponding variable. The g denotes to find all occurrences.
	 */
	var vowels = textInput.match(/[AEIOUaeiou]/g);
	var aString = textInput.match(/[Aa]/g);
	var eString = textInput.match(/[Ee]/g);
	var iString = textInput.match(/[Ii]/g);
	var oString = textInput.match(/[Oo]/g);
	var uString = textInput.match(/[Uu]/g);

	/*
	 * If string lengths are not null, set value to the length of the string
	 * else, leave them at zero
	 */
    var numberOfVowels = 0;
    var numberOfAs = 0;
    var numberOfEs = 0;
    var numberOfIs = 0;
    var numberOfOs = 0;
    var numberOfUs = 0;
    
    if (vowels != null) {
    	numberOfVowels = vowels.length;
    }
    
    if (aString != null) {
    	numberOfAs = aString.length;
    }

    if (eString != null) {
    	numberOfEs = eString.length;
    }
    
    if (iString != null) {
    	numberOfIs = iString.length;
    }
    
    if (oString != null) {
    	numberOfOs = oString.length;
    }
    
    if (uString != null) {
    	numberOfUs = uString.length;
    }
    

	// display occurrences of each vowel on the web page:
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
	
	/*
	 * The following array is needed in case of a tie. It will hold indices of
	 * aeiouArray whose value is equal to largestTotal
	 */
	var winnersArray = [];
	var currentWinner;
	
	/*
	 * Loop through array looking for values equaling largestTotal. Those that
	 * are equal will have their index pushed into the winnersArray[]
	 */
	for (var i=0; i < aeiouArray.length; ++i) {
		currentTotal = aeiouArray[i];
		
		if (currentTotal == largestTotal) {
			winnersArray.push(i);
		}

	} // end of for loop
	
	/*
	 * Look through winnersArray[]. All values here correspond to the index of
	 * aeiouArray. The text area belonging to index will have its background
	 * color changed to gold.
	 */
	for (var i = 0; i < winnersArray.length; ++i ) {
		
		switch (winnersArray[i]) {
		
			case 0:
				document.getElementById("numberOfAs").style.background = "gold";
				break;
			case 1:
				document.getElementById("numberOfEs").style.background = "gold";
				break;
			case 2:
				document.getElementById("numberOfIs").style.background = "gold";
				break;
			case 3:
				document.getElementById("numberOfOs").style.background = "gold";
				break;
			case 4:
				document.getElementById("numberOfUs").style.background = "gold";
				break;
		
		} // end switch
	} // end of for loop
	
} // end of determineVowelWinner function