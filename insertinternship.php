<?php

 include("dbcon.php");

 if(isset($_POST['submit']))
{


  $a= $_POST['name'];
  $b= $_POST['email'];
  $c= $_POST['number'];
  $d= $_POST['address'];
  $e= $_POST['gender'];
  $f= $_POST['college'];
  $g= $_POST['qualification'];
  $h= $_POST['branch'];
  $i= $_POST['semester'];
  $j= $_POST['internship'];
  

 $file = "INSERT INTO internship(name,email,mobile_number,address,gender,college,qualification,branch,semester,internship_course)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";

$result = mysqli_query($con,$file);

if ($result)
{
  echo "<script>alert('Data Save')</script>";
}
else
{
  echo "<script>alert('Data not Save')</script>";
}
}

?>