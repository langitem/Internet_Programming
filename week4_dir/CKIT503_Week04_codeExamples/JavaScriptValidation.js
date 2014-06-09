function validateJS() {
validateTextBoxes();
/* Execute the code in the function validateTextBoxes */
validateRadios();
/* Execute the code in the function validateRadios */
return (validateTextBoxes() && validateRadios());
/* If both validateTextBoxes and validateRadios have returned true (meaning that all fields have been completed) then validateJS will return true to the HTML file and the form will submit. If not, the form will not submit until the user fills in the necessary fields.  */  
}

function validateTextBoxes()  {
var all_input = document.getElementsByTagName("input");
/* Get all the elements with the tag name "input" and put them in a collection called all_input */
var completed = true;
/* The value of "completed" is set to true before the for loop begins and will only be set to false if one of the text boxes is not completed */ 
for (i = 0; i < all_input.length; i++)
	{
	if (all_input[i].type === "text")
	/* If this is a text box */
	   {
	   if (all_input[i].value === "")
	   /* If this input box has not been completed */
	   /* "if (all_input[i].value.length == 0)" is an alternative i.e. when the length of the input value is 0 */
	   	  {
		  alert("You have not filled in a text box.");
		  completed = false;
		  /* Set the value of "completed" to false */ 
		  }
	   }
	}
	return completed;  
	/* Return the value of "completed" (true or false) to the function validateJS */
}

function validateRadios() {
var years = document.getElementsByName("years");
/* Get all the elements with the name "years" (all the radio buttons) and put them in a collection also called years */ 
var radioChecked = false;
/* The value of "radioChecked" is set to false before the for loop begins and will only be set to true if one of the radio buttons is checked  */ 
for (i = 0; i < years.length; i++) 
	{
	if (years[i].checked)
	/* If this radio button has been checked */     
	   {
	   radioChecked = true;
	   /* Set the value of "radioChecked" to true */
	   } 
	}
if (!radioChecked)
/* If not radioChecked - this is the same as saying "if (radioChecked == false)" */
   {
   alert("You did not select one of the radio buttons");
   }
return radioChecked;
/* Return the value of "radioChecked" (true or false) to the function validateJS */                  
}


