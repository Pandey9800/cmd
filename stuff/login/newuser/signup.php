<?php
if(isset($_POST["register"]))
{
    $name = $_POST["username"];
    $pswd =$_POST["password"];
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('could not connect:' .mysql_error());
    }
    mysql_select_db("cmf", $con);
    $pswdmd5 = md5($pswd);
    $sql="INSERT INTO admin_log(username,password)VALUES('$name','$pswdmd5')";
    $result = mysql_query($sql);
    $rows=mysql_affected_rows();
    
           echo "Record Saved";
    mysql_close($con);
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="body-content">
<div class="module">
<h1>Create A New User</h1>
<form class="form" action="signup.php" method="post">
<div class="alert alert-error"></div>
<input type="text"  name="username" value="Username" required />
<input type="password" name="password" value="Password" required />
<input type="submit" value="Register" name="Register" class="btn btn-block btn-primary" />
<input type="reset" value="Reset" name="Register" class="btn btn-block btn-primary" />
</form>
</div>
</div>
</body>
</html> 