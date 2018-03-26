Manage
Program Policies
Powered by Google
Last account activity: 22 minutes ago
Details


<?php
//echo '<img src="fetch.php?id=' . htmlspecialchars($_GET["img_id"]) . '"border ="0" height="250" width="250" />';
mysqli_connect("localhost","root","")or die("Cannot connect to database"); 

//keep your db name
mysqli_select_db("women@work") or die("Cannot select database");
//$sql = "SELECT * FROM `second` where `bid` = 1"; 
// manipulate id ok 
//$sth = mysql_query($sql);
//$result=mysql_fetch_array($sth);
// this is code to display 
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['img'] ).'"/ width="200" height="200">"';
?>
 <html>
<head>
<style>
 body {
	 background-color:FireBrick ;
	 background-image: url("backgrnd6.jpg");
	  background-repeat: no-repeat;
	  background-size: 100% 100%;
	
} 
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
	padding-top: 50px
    border-collapse: collapse;
    width: 50%;
	color:Ivory 
}

th, td {
    padding: 15px;
}
tr:hover {background-color: black }
</style>
 <body>
 <br><br>
 <br><br><br><br><br>
 <br>
 <br>
 <br>
 
					
  <?php 
  
    $sql="SELECT * FROM sellerupload "; 
    $query=mysqli_query($sql); 
      
    while ($row=mysqli_fetch_array($query)) { 
          
?> 
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row[4] ).'"/ width="150" height="250">'; ?></td> 
        
<?php 
          
    } 
  
?>
</table>
</body>
</html>