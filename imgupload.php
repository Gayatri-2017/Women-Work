<?php


session_start();
$servername = "localhost";
$naam=$_SESSION["username"];
$dbname = "women@work";
$username="root";
$password="";

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

mysqli_query($conn,$insert_image); 
/*
{

echo "Your data has been uploaded! Buyer will contact you if interested.";

} 
else 
{
    echo "Error: " . $insert_image . "<br>" . $conn->error;
}
*/

$conn->close();

?>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase-auth.js"></script>
	<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css" />
	
<style>
	label {
  display: inline-block;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
#ul1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #87CEEB;
}
#li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
liL{
float:right;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}



#ul1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #87CEEB;
}
#li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
liL{
float:right;
}

</style>
</head>
<body style="background-image: url('images/images.png');">

	<ul id="ul1">
    <li id="li"><a href="org_events.html" offset="60" du-smooth-scroll="section-1" du-scrollspy="" target="_parent" class="">EVENT OVERVIEW</a></li>
    <!-- ngIf: showGallerySection -->
  
	<li id="liL"><a href="signin.html" offset="60" du-smooth-scroll="section-3" du-scrollspy="" target="_parent" class=" " align="right">Log Out</a></li>

	
	</ul>

<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">	
	<span class="login100-form-title p-b-53">
						Your data has been uploaded! Buyer will contact you if interested.
					</span>
					</div>
</body>
</html>
