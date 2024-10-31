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
<link href="css/css.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
<div id="content"> <!--main-->

<div id="us">     <!-- Haeder container -->
<center> <h3 class="Hete"> <img src="images/logo.jpg"> New Frontiers Of Research CMDPG College</h3></center>
</div>  <!-- haeder closer -->
<div id="container"> <!-- body container-->
    <div id='cssmenu'> <!-- Drop down menu -->  
        <ul>
          <li><a href='home.php'><span>Home</span></a></li>
          <li class='active has-sub'><a href='#'><span>Department</span></a>
              <ul>
                <li class='has-sub'><a href='sec.php'><span>Science</span></a></li>
                <li class='has-sub'><a href='com.php'><span>Commerce</span></a></li>
                <li class='has-sub'><a href='art.php'><span>Arts</span></a></li>
              </ul>
          </li>
          <li class='last'><a href='contact.php'><span>Contact</span></a></li>
        </ul>
    </div> <!-- drop down menu closed -->


  <div id="upleft"> <!-- Left body -->
    <h1 align="center">J</h1>
    <h1 align="center">O</h1>
    <h1 align="center">U</h1>
    <h1 align="center">R</h1>
    <h1 align="center">N</h1>
    <h1 align="center">A</h1>
    <h1 align="center">L</h1>
  </div>  <!-- Left body closed -->
  <center>
    <div id="Text1"></div>
      <h1 id="cmd">
       C.M. Dubey Post Graduate College
            </h1>
         <p id="box" valign="top"><b>
           Location: Link Road, Bilaspur, Chhattisgarh, India<br>
           Phone: 07752 - 225177<br>
           Fax: 07752 - 237291<br>
           Email: info@cmdpgcollege.in<br>
           Website: www.cmdpgcollege.in<br>
       </b>
         </p> 
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

        <p class="footer-company-name">R.S.P. &copy; 2017-18</p>
        <h4 style=color:white;>Follow Us On:-</h4>

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


