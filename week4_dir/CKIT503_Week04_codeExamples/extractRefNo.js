function getRef() {
var refNo ="";
var refPosition = 0;
var refInput = document.getElementById("refInput").value;
/* Get the input from the first textarea */
refPosition = refInput.indexOf("ZYX");
/* Get the index position of the start of the string "ZYX" (the position in the long string that forms the total input) */
if (refPosition != -1)
/* If the string "ZYX" is not found, the function refInput.indexOf will return the value -1 */
   {
   refNo = refInput.slice(refPosition,refPosition + 9);
   /* We are going to slice or extract from the total input the reference number consisting of "ZYX" plus 6 numerical digits. The first parameter is the index position of the start of our reference number. The second parameter is the start position + the total number of characters we want to extract */
   document.getElementById("refNo").value = refNo;
   /* We display the extracted reference number in the second HTML textarea called "refNo". The contents become equal to the value stored in the JavaScript variable we have also called refNo */
   }
else
   {
   alert("The input does not contain a reference number beginning with ZYX.");
   /* This happens when the function refInput.indexOf returns -1 */
   }
}