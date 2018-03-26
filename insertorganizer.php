
<?php 
session_start();
$naam=$_SESSION["username"];


$oedesc=$_REQUEST["oedesc"];
$venue=$_REQUEST["venue"];

$oedate=$_REQUEST["oedate"];
$oetime=$_REQUEST["oetime"];
$oeprice=$_REQUEST["oeprice"];
$eventname=$_REQUEST["eventname"];
$servername="localhost";
$username="root";
$password="";
$dbname="women@work";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
	{
		echo 'conn';
		die("connection failed : " . $conn->connect_error);
	}		//$result=mysqli_query($conn,$naam);
		
		//if ($result->num_rows == 0) 
			//{
				
				
				
				if($_POST["category"] == "cw")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Content Writing');";	
				
				if($_POST["category"] == "id")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Interior Designing');";	
				
				if($_POST["category"] == "cook")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Cooking');";	
				
				if($_POST["category"] == "stitch")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Stitching');";	
				
				if($_POST["category"] == "hand")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Handicraft');";	
				
				if($_POST["category"] == "teach")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Teaching');";	
				
				if($_POST["category"] == "arti")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Articraft Making');";	
				
				if($_POST["category"] == "baby")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Baby sitting');";	
				
				if($_POST["category"] == "beauty")
				$q="INSERT INTO `orgevents`(`OrgName`,`EventName`,`OEDesc`,`OEVenue`,`OEDate`,`OETime`,`OEPrice`,`Category`) VALUES ('".$naam."','".$eventname."','".$oedesc."','".$venue."','".$oedate."','".$oetime."','".$oeprice."','Parlor Services');";	
				
				
				
				
				
				
				
				if(mysqli_query($conn,$q))
				{
					echo "Successfully inserted !";
					//header("location:login.html");
				}

			//}	
		/*else 
			{
				header("location:uniqueusername.html");
			}
	*/
	
	
	
else 
	{
		echo "Cannot insert";
		//header("location:nomatch.html");
	}
$conn->close();
?>