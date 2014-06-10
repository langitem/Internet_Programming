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

	for (i = 0; i < allTextInput.length; i++) {
		if (allTextInput[i].type === "text") { // if type is a text box
			if (allTextInput[i].value === "") { // if contents is empty
				alert("Please fill in the text box.");
				textEntered = false; // set the value of textEntered to false
			}
		}
	} // end of for loop

	return textEntered;
} // end of validateTextBox function
