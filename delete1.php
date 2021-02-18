<?php
include 'dbcon.php';

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$data = "DELETE from registration where id = $id";
	$delete = mysqli_query($con,$data);

	if ($delete)
	{
		header("Location:display_registration.php");
	}
}
?>