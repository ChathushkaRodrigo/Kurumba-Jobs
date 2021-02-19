<!DOCTYPE html>
<body>
	<style>
    body {
      background-image: url('images/marble.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style>
	
 
<?php  require 'configure.php';

if(isset($_POST['submit'])){

error_reporting(E_ALL &~E_WARNING &~E_NOTICE);

 $jname=$_POST["name"];
 $jid=$_POST['DI'];
 $jemail=$_POST["email"];
 $jaddress=$_POST["t1"];
 $jcontact=$_POST["co"];
 $jpassword=$_POST["password"];


echo "<h1>Hello  " .$jname.  "<hr></h1><br><br><center><h1><u>Details you have entered for the registration form: </u></h1><br>";
echo "<h3><u>ID</u></h3> You will recieve it via email" .$jid. "<br><br>";
echo "<h3><u>Email</u> :".$jemail."<br><br></h3>";
echo "<h3>Address</u> :".$jaddress."<br><br></h3>";
echo "<h3><u>Contact no</u>: ".$jcontact."<br><br></center></h3>";




//check connection
 

 //if connected
 

 
 $sql="INSERT INTO Details(Name,ID,Email,Address,Contact,Password)VALUES('".$jname."','".$jid."','".$jemail."','".$jaddress."','".$jcontact."','".$jpassword."')";
		if($con->query($sql)){
			echo "Your Details are successfuly Recorded<br>";
		}
		else{
			echo"Error:<br>".$con->error;
		}
//close connection
$con->close();
}

?>
<br><br>
<center>
<label style=font-weight:bold;><h3>Portal page</h3></label>
<button id="n2" onclick="window.location.href='jobseeker.html'" width:50%>Job-Seeker Portal</button>
</center>

</body>