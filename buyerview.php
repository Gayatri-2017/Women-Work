<!DOCTYPE html>

<?php
session_start();
$servername = "localhost";
$dbname = "women@work";
$username="root";
$password="";
$naam=$_SESSION["username"];
$conn =  mysqli_connect($servername, $username, $password, $dbname);

$category=$_POST["category"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT * FROM `sellerupload` WHERE Category='$category'");
?>
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

<h2><?php echo "$category"?></h2>
<table>
<tr>
  <?php
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

 echo 
 "<td>
    <div class='card'>
    <a href = 'cooking_contest1.html'>
    
	<img src='download.jpg'  alt='$row[SellerName]' width='100'>
    </a>
  
  <h4><b>$row[SellerName]</b></h4>

     <p>Product Name : $row[PName]</p>
     <p>Product Price: $row[PPrice] </p>";
     ?>
	 <form method="post" action="mail.php">
	 <input type="image" src="interested button.png" alt="Submit" height="100">
	 </form>
	 <?php
	 echo"  </div></td>";




  }
  
  //$_SESSION['abc']=$row[PName];
  $conn->close();
?>
  
</tr>
</table>

  
  


</body>
</html> 


