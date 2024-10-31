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


<?php
mysql_connect("localhost","root","");
mysql_select_db("cmf");
$query=mysql_query("SELECT * FROM upload");
$rowcount=mysql_num_rows($query);
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
  <table id="t01" align="center">
  <tr> 
<td>Edition</td>
<td>Year</td> 
<td>download</td>  
</tr> 
<?php
for($i=1;$i<=$rowcount;$i++)
{
    $row=mysql_fetch_array($query);
?>
<tr> 
<td><?php echo $row["edition"] ?></td>
<td><?php echo $row["year"] ?></td>
<td><a href="stuff/uploads/<?php echo $row["name"] ?>"><?php echo $row["name"] ?></a></td>
</tr> 
    <?php
}
?>
  </table>
  

<center><u><h3 style="color:red">संपादकीय</u></h3> <br>
<p>”न्यू फ्रंटिर्यस आफ रिसर्च” के इस अंक का प्रकाषन विविध विषयो पर षोधरत् षोधार्थी एवं विषय विषेषज्ञों के लिए उपयोगी मार्गदर्षक साबित होगा । इस अंक में हिन्दी, राजनीति षस्त्र, सामाज षस्त्र, पर्यावरण, भूगोल आदि विषयों पर आधारित विद्वतजनों द्वारा षोध पत्र प्रकाषित किये गये है । सी.एम.डी. स्नातकोत्तर महाविद्यालय, बिलासपुर के षासीनिकाय के युवा कल्पनाषील,कर्मठ अध्यक्ष पं संजय दुबे जी एवं प्रचार्य डॉ. डी.के. चक्रवर्ती  की यह अकांक्षा और निर्देष था कि महाविद्यालय परिवार के द्वारा उच्च स्तरीय रिसर्च र्जनल का द्वितीय अंक का प्रकाषन समयानुसार किया जाना चाहिये इस बात का ध्यान रखते हुए यह अंक प्रकासित किया जा रहा है।
<br>
                        मुझे पुर्ण आषा है कि प्राध्याप्क एंव षोधार्षीगण अपने स्तरीय षोध पत्र प्रकाषानार्थ प्रषित कर इस षोधपत्रिका के निरंतर प्रकाषान में हमें सहयोग प्रदान करते रहेगें । पत्रिका को उच्च स्तरीय बनाने हेतु आपके सुझाव सादर आमंत्रित हैं ।</p>




</center>
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

