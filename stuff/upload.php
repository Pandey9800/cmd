<?php
mysql_connect("localhost","root","");
mysql_select_db("cmf");
if(isset($_REQUEST["submit"]))
{
    $edition =$_POST["edi"];
    $year =$_POST["year"];
    $file=$_FILES["file"] ["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];
   $path=("uploads/".$file);
   $file1=explode(".",$file);
   $ext=$file1 [1];
   $allowed=array("jpg","png","pdf");
   if(in_array($ext,$allowed))
   {
       move_uploaded_file($tmp_name, $path);
       mysql_query("INSERT INTO upload(name,edition,year) VALUES('$file','$edition','$year')");
   }
}


?> 

<html> 
<head> 
<style> 
body{

   background-color:seagreen;   
 
}
</style> 
</head> 
<body> 
<form enctype="multipart/form-data" method="post"> <br><br><br>
file upload:<input type="file" name ="file">
file Edition:<input type="text" name ="edi">
Year:<input type="text" name ="year">
<input type="submit" name="submit" value="upload"> 
</form> 
</body> 
</html> 