<?php

include("dbcon.php");
if (isset($_POST['submit'])) 
{
$a= $_POST['u'];
$b= $_POST['p'];

// insert into table_name(username,password)values("$a","$b");
$data = "INSERT INTO user(username,password)values('$a','$b')";
mysqli_query($con,$data);
}

?>