<!DOCTYPE html>
<html>
<head>
  <!--link css file-->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<p>Click the button to get your coordinates.</p>

<button class = "btn btn-locate float-container" onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>