<?php


//session_start();
$servername = "localhost";

$dbname = "waw";
$username="root";
$password="";
$naam="SAI";
$category=$_POST["category"];
$imagename=$_FILES["myimage"]["name"]; 

	
	

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    echo 'conn';
    die("connection failed: " . $conn->connect_error);
}

	$productname=$_REQUEST["productname"];
	$price=$_REQUEST["price"];

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in table
$insert_image="INSERT INTO `sellerupload`(`SellerName`,`PName`,`PPrice`,`PImage`,`Category`) 
VALUES('".$naam."','".$productname."','".$price."','".$imagetmp."','".$category."')";
mysql_query($insert_image);
if (mysqli_query($conn,$insert_image)) 
{
echo "Your data has been uploaded! Buyer will contact you if interested.";

} 
else 
{
    echo "Error: " . $insert_image . "<br>" . $conn->error;
}

$conn->close();

?>
