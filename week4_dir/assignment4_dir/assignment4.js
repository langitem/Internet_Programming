function validateTextBox() {
	/*
	Get all the elements with the tag name "input" and put them in
	a collection called all_input:
	*/
	var allTextInput = document.getElementsByTagName("input");

	/* The value of textEntered is set to true before the loop begins
	and will be set to false if there is nothing entered into the textbox:
	*/
	var  textEntered = true;
/*
	for (i = 0; i < allTextInput.length; i++) {
		if (allTextInput[i].type === "text") { // if type is a text box
			if (allTextInput[i].value === "") { // if contents is empty
				alert("Please fill in the text box.");
				textEntered = false; // set the value of textEntered to false
			} else {
				//countNumVowels(1234);
				//function3();
			}
		}
	} // end of for loop
	alert(allTextInput.length);
*/
	if (allTextInput.value == "") {
		alert("Please fill in the text box.")
		textEntered = false;
	}
	return textEntered;
} // end of validateTextBox function

function countNumVowels(allTextInput) {
	/*
	 * Count the number of vowels
	 */
	
	alert("Entered countNumVowels function! Good job!\ntext:" + allTextInput);
}



function function3() {
	var someText = "ASDF";
	alert("You entered function3!\nGood job!\nsomeText = " + someText);
}
