<?php

 include("dbcon.php");

 if(isset($_POST['submit']))
{


  $a= $_POST['n'];
  $b= $_POST['c'];
  $c= $_POST['a'];
  $d= $_POST['college'];
  $e= $_POST['gender'];
  $filename = $_FILES['image']['name'];
  $tmpname = $_FILES['image']['tmp_name'];

  $file = "upload/".$filename;
    
    // print_r($file); 

    move_uploaded_file($tmpname, $file);

	 $data = "INSERT INTO teacher(name,city,address,college,gender,image)values('$a','$b','$c','$d','$e','$file')";
	 $result = mysqli_query($con,$data);

	if ($result) 
	{
		header("Location:displayteacher.php"); # code...
	}
}
?>