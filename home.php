<?php
if(isset($_POST["email"]))
{
    $email = $_POST["email"];
    $message =$_POST["msg"];
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('could not connect:' .mysql_error());
    }
    mysql_select_db("cmf", $con);
    $sql="insert into contact_tab(Email,Message)values('$email','$message')";
    $result = mysql_query($sql);
    $rows=mysql_affected_rows();
    
       if ($rows==0)
       {
           echo "Record Saved";
    }
    mysql_close($con);
}
?>


<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/page.css">
<link rel="stylesheet" href="css/Footer.css">
<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
<style>
.jor{
    font-size:40px;
}
.alignleft {
    float: left;
    margin:2em;
}
.alignright {
	float: right;
}
</style> 

</head>
<body>
<div id="content"> <!--main-->

<div id="us">     <!-- Haeder container -->
<h1 class="Hete"> <img src="images/logo.jpg"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp New Frontiers Of Research CMDPG College</h1>
<p align="center">(Multidisciplinary Multilingual Referred Research Journal)</p>
</div>  <!-- haeder closer -->
<div id="container"> <!-- body container-->
    <div id='cssmenu'> <!-- Drop down menu -->  
        <ul>
          <li><a href='home.php'><span>Home</span></a></li>
          <li class='active has-sub'><a href='#'><span>Journals</span></a>
              <ul>
                <li class='has-sub'><a href='sec.php'><span>Papers</span></a></li>
                </ul>
          </li>
          <li class='last'><a href='contact.php'><span>Contact</span></a></li>
        </ul>
    </div> <!-- drop down menu closed -->


  <div id="upleft"> <!-- Left body -->
  <br><br><br> <br><br> <br><br> <br><br> 
    <h1 align="center" class="jor">J</h1>
    <h1 align="center" class="jor">O</h1>
    <h1 align="center" class="jor">U</h1>
    <h1 align="center" class="jor">R</h1>
    <h1 align="center" class="jor">N</h1>
    <h1 align="center" class="jor">A</h1>
    <h1 align="center" class="jor">L</h1>
  </div>  <!-- Left body closed -->
  <div id="slider">
  <img src="images/cmd4.jpg" />
  <img src="images/cmd1.jpg" />
  <img src="images/cmd2.jpg" />
  <img src="images/cmd3.jpg" />
  <img src="images/cmd5.jpg" />
  <img src="images/cmd6.jpg" />
  <img src="images/cmd7.jpg" />

  <img src="images/cmd8.jpg" />
</div>
<!--Custom navigation buttons on both sides-->
<!--nav bar-->
<div style="text-align:center;padding:10px;z-index:400;">
  <a onclick="imageSlider.previous()" class="group2-Prev"></a>
  <a id='auto' onclick="switchAutoAdvance()"></a>
  <a onclick="imageSlider.next()" class="group2-Next"></a>
</div>

<h2 align="center">An Official publication of the</h2>
<h2 align="center">Pt. Bhagwat Prasad Dubey Smriti Samaj Evam Vigyan Unnayan Samiti</h2>

<h3 align ="center">EDITORIAL BOARD</h3> <br> <br> <br> 

<div id="textbox">
<p class="alignleft"><b style="font-size:25;">Editor</b> <br>
Dr. H.L. Agarwal  <br> 
(H.O.D. of Commerce) <br> <br> 
<b style="font-size:25;">Advisor</b> <br> 
Dr. Vibha Goyal <br>
(H.O.D. of Chemistry) <br> <br> 
<b style="font-size:25;">Managing Editor</b> <br> 
Dr. K.K. Jain <br>
(H.O.D. of Physics) <br>  
Dr. S. Pavani <br>
(H.O.D. of C.S.)  </p>
<p class="alignright"><b style="font-size:25;">Co Editor</b> <br> 
Dr. P.L. Chandrakar <br>
Vice Principle <br>
(H.O.D. of Geography) <br> <br> 
<b style="font-size:25;">Co-Ordinator</b> <br> 
Dr. Rita Bajpai<br> 
(H.O.D. of Chemistry) <br> 
Govt. Sc. College, Mungeli (C.G.)  </p>
</div>

</div>
  
 <footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="images/cmdlogo.JPG"></h3>

				<p class="footer-links">
					<a href="home.php">Home</a>
					·
					<a href="contact.php">Contact</a>
          .
          <a href="location.php">Location</a>
				</p>

        <p class="footer-company-name">Designed By:- Ravi Shankar Pandey &copy; 2017-18</p>
        <h4 style=color:white;>Follow Us On: -</h4>

				<div class="footer-icons">

				<center>	<a href="https://www.facebook.com/bilaspuruniversity.NACC.A/"><img src="images/fblogo.jpg"></a> </center>
				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>


				<form action="home.php" method="post">
                Email:<input class="input" name="email" type="text" value="" required>
                message:<textarea cols="25" name="msg" required></textarea><br>
<input name="msg1" type="submit" value="send">
				</form>
			</div>
		</footer>
</div>
</body>
</html>


