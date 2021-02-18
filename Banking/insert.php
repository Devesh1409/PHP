<?php
include 'dbcon.php';
 if(isset($_POST['submit']))

{
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['balance'];

   
   $data = "INSERT INTO customer(name,email,current_balance)values('$a','$b','$c')";


   $result =  mysqli_query($con,$data);

}



?>