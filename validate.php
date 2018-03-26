<?php
session_start();
$servername = "localhost";

$dbname = "women@work";
$username="root";
$password="";
$naam=$_REQUEST["username"];
$pasword=$_REQUEST["password"];

$_SESSION["username"]=$naam;
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

				if($_POST["type"]=="seller"){
				
				$sql = "SELECT * FROM `seller` WHERE SName='".$naam."' AND SPass='".$pasword."'";
					$result=mysqli_query($conn,$sql);
					if ($result->num_rows > 0)
					header("location:sellerhome.php");
				}					


				else if($_POST["type"]=="buyer"){
					
$sql = "SELECT * FROM `buyer` WHERE BuyName='".$naam."' && BuyPass='".$pasword."'";
$result=mysqli_query($conn,$sql);
					if ($result->num_rows > 0)
					
header("location:buyerhome.html");
				}
				else if($_POST["type"]=="organizer"){
$sql = "SELECT * FROM `organizer` WHERE OrgName='".$naam."' && OrgPass='".$pasword."'";
			$result=mysqli_query($conn,$sql);
					if ($result->num_rows > 0)
					
			header("location:organizerhome.html");
				}


    

$conn->close();
?>