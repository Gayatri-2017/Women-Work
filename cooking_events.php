<!DOCTYPE html>

<?php
session_start();
$servername = "localhost";
$dbname = "women@work";
$username="root";
$password="";
$naam=$_SESSION["username"];
$conn =  mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql1 = "SELECT * FROM `orgevents` WHERE Category='Content Writing'";
$result = mysqli_query($conn, "SELECT * FROM orgevents WHERE Category='Content Writing'");
?>
  
<!--
<div class="container">
  //$sql = "SELECT * FROM `user` WHERE username='".$naam."' && password='".$pasword."'";
    <h4><b>Unusual recipes using rice</b></h4> 
     <p>Date(s) : <?php echo $row[5] ?>.</p>
     <p>Time: <?php echo $row[6] ?></p>
     <p>Venue: <?php echo $row[4] ?></p>
     <p>Cost: <?php echo $row[7] ?></p>
  </div>
-->

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

#image1 {
  max-width: 300px;
  max-height: 300px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
</style>
</head>
<body>

<h2>Cooking</h2>
<table>
<tr>
  <?php
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//printf("ID: %s  Name: %s", $row[0], $row[1]);
 echo "<td>
    <div class='card'>
    <a href = 'cooking_contest1.html'>
    <img id='image1' src='https://static-communitytable.parade.com/wp-content/uploads/2015/12/Hawaiian-Fried-Rice.jpg' alt='$row[EventName]' style='width:100%'>
    </a>
    <h4><b>$row[EventName]</b></h4>

     <p>Date(s) : $row[OEDate]</p>
     <p>Time: $row[OETime] </p>
     <p>Venue: $row[OEVenue] </p>
     <p>Cost: $row[OEPrice] </p>
  </div></td>";

}
$conn->close();
?>
</tr>
</table>

<!--<td>
<div class="card">
  
  <a href = "cooking_contest1.html">
    <img id="image1" src="https://static-communitytable.parade.com/wp-content/uploads/2015/12/Hawaiian-Fried-Rice.jpg" alt="Avatar" style="width:100%">
  </a>
 
</div>
</td>
<td>
<div class="card">
  <img class="image1" src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</td>-->


</body>
</html> 
