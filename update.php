<!DOCTYPE html>
<html>
<head>


<meta charset="UTF-8">
<title>KURUMBA JOBS</title>
<link rel ="stylesheet" href="css/common(4).css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
<center>

</center>
</head>

<body>


 <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src ="images/KurumbaJobs.png" width="125px">
                </div>
                <nav>
                    <ul>
                    <li><a href="../Nisal/html/index.html">Home</a></li>
                        <li><a href="../Nisal/html/Jobs.html">Jobs</a></li>
                        <li><a href="../Nisal/html/about.html">About</a></li>
                       <li><a href="Contact US.html" target="_blank">Contact</a></li>
                        <li><a href="../Nisal/html/account.html">Account</a></li>
                    </ul>
                </nav>
                
            </div>
        
        </div>
    </div>
<!-----------------------------------------------End of Header------------------------------------------------------------------------>
		
		
		<style>
    body {
      background-image: url('images/coconut10.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style>
	
		
		
		
<center>

<h1> Update your Data </h1><br><br>


<form action ="update.php" method ="POST">
Enter your ID: <input type ="text" name="n1" required><br><br>
Password :<input type ="text" name="n6" required ><br><br>
Name to upate: <input type ="text" name="n2" required><br><br>
Email to update:<input type ="text" name="n3" required><br><br>
Addresss to update:<input type ="text" name="n4" required><br><br>
Contact` to upate:<input type ="text" name="n5" required ><br><br>

<input type="submit" name="up1" value ="Update"><br><br>
</form>

<label>Portal page</label>
<button id="n2" onclick="window.location.href='jobseeker.html'" width:50%>Job-Seeker Portal</button>
</center>

	<!-----------------------------------------------Start of Footer----------------------------------------------------------------------->
<!--footer------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
               <h3>Download Our App</h3>
               <p>Download App for Android and iOS Mobile Phones</p>
               <div class="app-logo">
                   <img src="images/playandapp.png">
                   
               </div>
            </div>
            <div class="footer-col-2">
                <img src="images/footerkurumba.png">
                <p>Our Main Purpose to make our country having suitable jobs for jobseekers</p>
             </div>
             <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Blogs</li>
                    <li>Privacy and Policy</li>
                    <li><a href="Answers & FAQs.html" target="_blank">Answers & FAQ's </a> </li>
                    <li><a href = "../Kisaja/HTML/project_Terms_and_Conditions.html">Terms and Conditions</a></li>
                    <li>Coupons</li>
                </ul>
             </div>
             <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
             </div>
        </div>
        <hr>
        <p class="Copyright">Copyright 2020 - KURUMBA JOBS</p>
    </div>
</div>




















</body>



</html>
















<?php

if(isset($_POST['up1'])){
	
	
	require 'configure.php';
	
	$id= $_POST["n1"];
	$name= $_POST["n2"];
	$email= $_POST["n3"];
	$address= $_POST["n4"];
	$contact= $_POST["n5"];
	$password= $_POST["n6"];
	
	
	$query= "UPDATE details SET `Name`='".$name."',`Email`='".$email."',`Address`='".$address."' ,`Contact`= '".$contact."' WHERE ID = $id AND Password= $password";
	
	$result = mysqli_query($con,$query);
	
	if($result){
		
		echo 'Data updated';
		
	}
	else{
		echo 'Not updated';
	}

	
}


?>
