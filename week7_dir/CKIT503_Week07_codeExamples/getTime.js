function ajaxtime(){
var timeRequest;  

timeRequest = new XMLHttpRequest();
/* timeRequest is a new instance of the XMLHttpRequest object */ 
/* We are now going to create a function to receive data from the server */
timeRequest.onreadystatechange = function(){
		if(timeRequest.readyState == 4 && timeRequest.status==200){
		/* readystate == 4 indicates that the response is ready and status == 200 means OK */
			document.myForm.time.value = timeRequest.responseText;
			/* Here we use the DOM to alter the value in the HTML form input box called "time". We write the time and date details returned by the server */
		}
}
timeRequest.open("GET", "getTime.php", true);
/* This prepares our request to the PHP file on the server */
timeRequest.send(null);
/* This sends the request */ 
}