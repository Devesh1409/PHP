<?php
include 'dbcon.php';
 if(isset($_POST['submit']))

{
    $a = $_POST['name'];
    $b = $_POST['email'];
    $filename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];

    $file = "upload/".$filename;

    move_uploaded_file($tmpname, $file);

    // print_r($file);

   
   $data = "INSERT INTO employee(name,email,image)values('$a','$b','$file')";


   $result =  mysqli_query($con,$data);

}








?>