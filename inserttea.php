<?php

 include("dbcon.php");

 if(isset($_POST['submit']))
{

  $a= $_POST['name'];
  $b= $_POST['tea'];
  $c= $_POST['address'];
  $d= $_POST['number'];
  

echo $file = "INSERT INTO tea(name,tea,address,phone)values('$a','$b','$c','$d')";

mysqli_query($con,$file);

}

?>
<!-- echo print only string values -->