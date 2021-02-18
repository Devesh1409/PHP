<?php
include "dbcon.php";

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$data = "DELETE from teacher where id = $id";
	$delete = mysqli_query($con,$data);

	if ($delete)
	{
		header("Location:displayteacher.php");
	}
}
?>