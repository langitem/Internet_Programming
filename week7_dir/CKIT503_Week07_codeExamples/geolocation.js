function useGeolocation() {
navigator.geolocation.getCurrentPosition(findLocation);
/* The parameter is a function to which your location details will be passed, via findLocation's position parameter */
}

function findLocation(position) {
document.getElementById("location").value = "Latitude: " + position.coords.latitude + ". Longitude: " + position.coords.longitude;
}