<?php
session_start();
$servername = "localhost";

$dbname = "women@work";
$username="root";
$password="";
if(isset($_SESSION['username']))
	$naam=$_SESSION['username'];
else
	die('You are not logged in!');
$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*

if($_POST['category'] == "id"){
	$sql = "update `sinterested`  set InteriorDesigning=1 where SellerName=`$naam`";
}
else if($_POST["category"] == "id"){
	$sql = "INSERT INTO sinterested(`InteriorDesigning`, `SellerName`) values('1', '".$naam."')";
}
else if($_POST["category"] == "cook"){
	$sql = "INSERT INTO sinterested(`Cooking`, `SellerName`) values('1', '".$naam."')";
}
else if($_POST["category"] == "stitch"){
	$sql = "INSERT INTO sinterested(`Stitching`, `SellerName`) values('1', '".$naam."')";
}
else if($_POST["category"] == "hand"){
	$sql = "INSERT INTO sinterested(`Handicraft`, `SellerName`) values('1', '".$naam."')";
}
else if($_POST["category"] == "teach"){
	$sql = "INSERT INTO sinterested(`Teaching`, `SellerName`) values('1', '".$naam."')";
}
else if($_POST["category"] == "arti"){
	$sql = "INSERT INTO sinterested(`ArtifactMaking`, `SellerName`) values('1', '".$naam."')";
}
else if($_POST["category"] == "baby"){
	$sql = "INSERT INTO sinterested(`BabySittting`, `SellerName`) values('1', '".$naam."')";
}
else if($_POST["category"] == "beauty"){
	$sql = "INSERT INTO sinterested(`ParlourServices`, `SellerName`) values('1', '".$naam."')";
}
*/
/*
if($_POST['category'] == "cw"){
	$sql = "UPDATE `sinterested`  set `ContentWriting`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "id"){
	$sql = "UPDATE `sinterested`  set `InteriorDesigning`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "cook"){
	$sql = "UPDATE `sinterested`  set `Cooking`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "stitch"){
	$sql = "UPDATE `sinterested`  set `Stitching`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "hand"){
	$sql = "UPDATE `sinterested`  set `Handicraft`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "teach"){
	$sql = "UPDATE `sinterested`  set `Teaching`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "arti"){
	$sql = "UPDATE `sinterested`  set `ArtifactMaking`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "baby"){
	$sql = "UPDATE `sinterested`  set `BabySittting`=1 where SellerName=`$naam`";
}
 if($_POST['category'] == "beauty"){
	$sql = "UPDATE `sinterested`  set `ParlourServices`=1 where SellerName=`$naam`";
}
*/

//$checkBox = implode(',', $_POST['category']);
$i=0;
$count=0;
/*
$count=0;
for($i=0; !isset($_POST['category'][$i]); $i++){
	if($_POST['category'][$i] == "cw"){
		$sql = "UPDATE `sinterested`  set `ContentWriting`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "id"){
		$sql = "UPDATE `sinterested`  set `InteriorDesigning`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "cook"){
		$sql = "UPDATE `sinterested`  set `Cooking`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "stitch"){
		$sql = "UPDATE `sinterested`  set `Stitching`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "hand"){
		$sql = "UPDATE `sinterested`  set `Handicraft`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "teach"){
		$sql = "UPDATE `sinterested`  set `Teaching`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "arti"){
		$sql = "UPDATE `sinterested`  set `ArtifactMaking`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "baby"){
		$sql = "UPDATE `sinterested`  set `BabySittting`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
	 if($_POST['category'][$i] == "beauty"){
		$sql = "UPDATE `sinterested`  set `ParlourServices`=1 where SellerName=`$naam`";
		$result=mysqli_query($conn,$sql);
		$count+=1;
		continue;
	}
}
/*
for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
           checkedValue = inputElements[i].value;

*/


//echo "count = $count";

$sql1 = "Select * from `sinterested` where SellerName='$naam'";
if ($result1=mysqli_query($conn,$sql1)){

	//if(mysqli_num_rows($result)>=1){
	//if(mysqli_num_rows($result)<1){
	if($result1->num_rows<1){
		if(!empty($_POST['category'])){
			foreach($_POST['category'] as $selected){
				echo "The select value is $selected.</br>";

				if($selected == "cw"){
					$sql = "INSERT into `sinterested` (`ContentWriting`, `SellerName`) values(1, '".$naam."')";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					break;
					
				}
				if($selected  == "id"){
					$sql = "INSERT into `sinterested` (`InteriorDesigning`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					$count+=1;
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					break;
					
				}
				 if($selected  == "cook"){
					$sql = "INSERT into `sinterested` (`Cooking`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					$count+=1;
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					break;
					
				}
				 if($selected  == "stitch"){
					$sql = "INSERT into `sinterested` (`Stitching`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					break;
					
				}
				 if($selected  == "hand"){
					$sql = "INSERT into `sinterested` (`Handicraft`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					break;
					
				}
				 if($selected  == "teach"){
					$sql = "INSERT into `sinterested` (`Teaching`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully. result = $result";
					else
						echo "error in executing $sql";
					$count+=1;
					break;
					
				}
				 if($selected  == "arti"){
					$sql = "INSERT into `sinterested` (`ArtifactMaking`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					break;
					
				}
				 if($selected  == "baby"){
					$sql = "INSERT into `sinterested` (`BabySitting`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					break;
					
				}
				 if($selected  == "beauty"){
					$sql = "INSERT into `sinterested` (`ParlourServices`, `SellerName`) values(1, '$naam')";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					break;
					
				}
			}
		}

	}
	//else {
	//if(mysqli_num_rows($result)>=1){
	$result1=mysqli_query($conn,$sql1);
	if($result1->num_rows>=1){
		if(!empty($_POST['category'])){
			foreach($_POST['category'] as $selected){
				echo "The select value is $selected.</br>";

				if($selected == "cw"){
					$sql = "UPDATE `sinterested`  set `ContentWriting`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					continue;
					
				}
				 if($selected  == "id"){
					$sql = "UPDATE `sinterested`  set `InteriorDesigning`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					$count+=1;
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					continue;
					
				}
				 if($selected  == "cook"){
					$sql = "UPDATE `sinterested`  set `Cooking`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					$count+=1;
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					continue;
					
				}
				 if($selected  == "stitch"){
					$sql = "UPDATE `sinterested`  set `Stitching`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					continue;
				}
				 if($selected  == "hand"){
					$sql = "UPDATE `sinterested`  set `Handicraft`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					continue;
					
				}
				 if($selected  == "teach"){
					$sql = "UPDATE `sinterested`  set `Teaching`=1 where `SellerName`='$naam'";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully. result = $result";
					else
						echo "error in executing $sql";
					$count+=1;
					continue;
					
				}
				 if($selected  == "arti"){
					$sql = "UPDATE `sinterested`  set `ArtifactMaking`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					continue;
				}
				 if($selected  == "baby"){
					$sql = "UPDATE `sinterested`  set `BabySitting`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					continue;
				}
				 if($selected  == "beauty"){
					$sql = "UPDATE `sinterested`  set `ParlourServices`=1 where SellerName='$naam'";
					$result=mysqli_query($conn,$sql);
					if(isset($result))
						echo "$sql query executed successfully";
					else
						echo "error in executing $sql";
					$count+=1;
					continue;
				}
			}
		}

	}
}
header("location:sellerupload.html");
//echo "Count = $count";

$conn->close();
?>
