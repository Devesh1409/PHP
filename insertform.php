<?php
 include 'dbcon.php';
 if(isset($_POST['submit']))

 {
    echo $a = $_POST['name'];
    echo $b = $_POST['email'];
    $c = $_POST['education'];

    // print_r($c);

    $edu = implode(",",$c);  // <!-- immplode used to convert array to string-->
    echo $edu;   
   $data = "INSERT INTO form(name,email,education)values('$a','$b','$edu')";


   $result =  mysqli_query($con,$data);

  if ($result) 
  {
    header("Location:form_display.php");
  }
  
 }




?>