<?php
// mysqli_connect('server_name','username','password','databasename');
$con = mysqli_connect('localhost','root','','banking');

if($con)
{
	 "connected";
}
else
{
	 "not connected";
}

?>