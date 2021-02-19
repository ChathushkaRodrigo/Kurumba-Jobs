

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



 <style>
    body {
      background-image: url('images/coconut10.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style>
<center>	



<?php
require 'configure.php';



if(isset($_POST["submit"])) {




$query = "SELECT *FROM details WHERE ID='".$_POST["k"]."' ";

$result = mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
	echo"<fieldset>";
	echo "<ledgend> <h1>Hello ! ".$row['Name']." your account details are shown below </h1></ledgend>";
	echo "<hr>";
	echo"<br><br><br>";
	echo "<h3><u>Name:</u></h3>   ".$row['Name']. "";
	echo "<br><br>";
	echo "<h3><u>ID:</u> </h3>".$row['ID']. "";
	echo "<br><br>";
	echo "<h3><u>Email: </u></h3>   ".$row['Email']. " ";
	echo "<br><br>";
	echo "<h3><u>Address:</u> </h3>  ".$row['Address']. "";
	echo "<br><br>";
	echo "<h3><u>Contact:</u> </h3>  ".$row['Contact']. "";
	echo "<br>";
	echo"</fieldset>";

}
	
	
	
	
	
}






?>
<br><br>
<label><h3>Portal page<h3></label><br>
<button id="n2" onclick="window.location.href='jobseeker.html'" width:50%>Job-Seeker Portal</button>


</body>







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
    
</html>


</html>










