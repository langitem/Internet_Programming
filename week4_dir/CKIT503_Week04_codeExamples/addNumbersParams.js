function RetrieveValuesAndAdd() {
var numberOne = parseInt(document.getElementById("firstNumber").value);
var numberTwo = parseInt(document.getElementById("secondNumber").value);
addNumbers (numberOne, numberTwo);
}

function addNumbers (firstNumber, secondNumber) { 
var total; 
total = parseInt(firstNumber + secondNumber);
alert ("The total is " + total);
return total; 
}
