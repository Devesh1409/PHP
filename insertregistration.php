<?php
 include 'dbcon.php';
 if(isset($_POST['submit']))

 {
    $a = $_POST['fname'];
    $b = $_POST['lname'];
    $c = $_POST['number'];
    $d = $_POST['email'];
    $e = $_POST['marks'];
    $f = $_POST['course'];
    $g = $_POST['gender'];


   
   $data = "INSERT INTO registration(First_name,Last_name,mobile_number,email,marks,course,gender)values('$a','$b','$c','$d','$e','$f','$g')";


   $result =  mysqli_query($con,$data);

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