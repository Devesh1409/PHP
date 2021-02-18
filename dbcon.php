<?php
// mysqli_connect('server_name','username','password','databasename');
$con = mysqli_connect('localhost','root','','curd');

if($con)
{
	 "connected";
}
else
{
	 "not connected";
}

?>