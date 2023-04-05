

  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<?php
$servername = "localhost";
$username = "root";
$password = "";
$port="3307";
$db="wayout";

// Create connection
$conn = mysqli_connect($servername,$username, $password,$db,$port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
    echo "<div id='demo'></div>";
    $sql = mysqli_query($conn, "SELECT DISTINCT Safepoint_name,Latitute,Longitude FROM safepoints");
    while($row = mysqli_fetch_array($sql)) {
        $latl[] = $row['Latitute'];
        $long[] = $row['Longitude'];}
    

?>



<script type="text/JavaScript">
let text2 = "Alia";
let text = "";
var lat1 = <?php echo json_encode($latl); ?>;
var lon1 = <?php echo json_encode($long); ?>;
var lat2 =7.9;
var lon2 =5.6;

document.getElementById("demo").innerHTML = "Long island ice tea"; 

  var p = 0.017453292519943295;    // Math.PI / 180
  var c = Math.cos;
  let x = [1000000000.0];
  document.getElementById("demo").innerHTML = lat1.length;  
  var a = 0.5 - c((lat2 - lat1[0]) * p)/2 + c(lat1[0] * p) * c(lat2 * p) *  (1 - c((lon2 - lon1[0]) * p))/2;
  var k =0;
  text = 12742 * Math.asin(Math.sqrt(a));;  


  document.getElementById("demo").innerHTML = text;       
 
</script>

</body>
</html> 
