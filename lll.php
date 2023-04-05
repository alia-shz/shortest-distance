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
        $safe[] = $row['Safepoint_name'];
        $latl[] = $row['Latitute'];
        $long[] = $row['Longitude'];}
       
?>



<script type="text/JavaScript">
let text2 = "";
let text = "";

var name = <?php echo json_encode($safe); ?>;
var lat1 = <?php echo json_encode($latl); ?>;
var lon1 = <?php echo json_encode($long); ?>;
var lat2 =7.9;
var lon2 =5.6;
const cars = [];
const safe = [];
  var p = 0.017453292519943295;    // Math.PI / 180
  var c = Math.cos;
  let x = [1000000000.0];
  var i =0;
  while(i<lat1.length){        document.getElementById("demo").innerHTML = lat1.length;  
        var a = 0.5 - c((lat2 - lat1[i]) * p)/2 + c(lat1[i] * p) * c(lat2 * p) *  (1 - c((lon2 - lon1[i]) * p))/2;
        cars[i] = 12742 * Math.asin(Math.sqrt(a));
        text = text+ name[i] + "  "+ lat1[i]+"   "+lon1[i]+ "<br>";  
        i=i+1;
    }
    var j =0;
    var lm =0;
    /*while(j<name.length)
    {
        if(name[j] != ',')
        {
            safe[lm] = name[j];
            lm = lm+1; 
        }
        
        j= j+1;
    }
    text = text+safe.length + "<br>";  
 var lsd = 0;
    while(lsd<safe.length)
    {
        text = text+ safe[lsd]+ "<br>";  
        
        lsd= lsd+1;
    }*/
    
  /*document.getElementById("demo").innerHTML = text;*/  
  var ind = cars.indexOf(Math.min(...cars));
  var mindis = Math.min(...cars);
  text2 = text2 +"Savepoint name: " +safe[ind] + "<br>" +" Distance"+ mindis  + "m";
  document.getElementById("demo").innerHTML = text;
 
</script>

</body>
</html> 