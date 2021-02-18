<?php

 include("dbcon.php");

 if(isset($_POST['submit']))
{


  $a= $_POST['name'];
  $b= $_POST['class'];
  $c= $_POST['city'];
  $d= $_POST['address'];
  $e= $_POST['number'];
  $f= $_POST['branch'];
  $g= $_POST['college'];
  

echo $file = "INSERT INTO itm1(name,class,city,address,phone,branch,college)values('$a','$b','$c','$d','$e','$f','$g')";

mysqli_query($con,$file);

}

?>