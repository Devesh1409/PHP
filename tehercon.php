<?php
// mysqli_connect('server_name','username','password','databasename');
$data = mysqli_connect('localhost','root','','curd');

if($data)
{
	echo "connected";
}
else
{
	echo "not connected";
}

?>