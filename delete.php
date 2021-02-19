




<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>KURUMBA JOBS</title>
<link rel ="stylesheet" href="css/common(4).css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
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
<h1> Delete your Data </h1><br><br><br>
<form action="delete.php" target="_self" method="POST">
Enter Your ID:<input type="text" name="del" required><br><br>
Enter your password:<input type="text" name = "pdel" required><br><br>
<button id="n3" name="delete" onclick href='delete.php'> DELETE</button><br>
</form>
<br><br>
<center>
<label>Portal page</label>
<button id="n2" onclick="window.location.href='jobseeker.html'" width:50%>Job-Seeker Portal</button>
</center>
</center><br><br><br>






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

if(isset($_POST['delete'])){
	
require 'configure.php';


$id=$_POST['del'];

$password=$_POST['pdel'];


$sql = "DELETE FROM details WHERE ID= $id AND Password= $password";

if ($con->query($sql) === TRUE) 
{
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();


}//ifbracets
?>


