<?php 
$unaam=$_REQUEST["username"];
$phone=$_REQUEST["phn"];
$mailid=$_REQUEST["email"];
$paswd=$_REQUEST["password"];




$servername="localhost";
$username="root";
$password="";
$dbname="women@work";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
	{
		echo 'conn';
		die("connection failed : " . $conn->connect_error);
	}
	

		
		
		
		$result=mysqli_query($conn,$unaam);
		
		//if ($result->num_rows == 0) 
			//{
				
				if($_POST["type"]=="seller")
				{
				
				
				$q="INSERT INTO `seller`(`SName`,`SEmail`,`SContact`,`SPass`) VALUES ('".$unaam."','".$mailid."','".$phone."','".$paswd."')";
				
				}
				else if($_POST["type"]=="buyer")
				{
				$q="INSERT INTO `buyer`(`BuyName`,`BuyEmail`,`BuyContact`,`BuyPass`) VALUES ('".$unaam."','".$mailid."','".$phone."','".$paswd."')";	
				}
				else if($_POST["type"]=="organizer")
				{
				$q="INSERT INTO `organizer`(`OrgName`,`OrgEmail`,`OrgContact`,`OrgPass`) VALUES ('".$unaam."','".$mailid."','".$phone."','".$paswd."')";	
				}
				
				if(mysqli_query($conn,$q))
				{
					echo "Successfully registered !";
					//header("location:login.html");
				}
		header("location:signin.html");
			//}	
		/*else 
			
		
			
	
	
	
	
else 
	{
		echo "Cannot register";
		//header("location:nomatch.html");
	}
	*/
$conn->close();
?>