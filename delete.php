<?php
include 'dbcon.php';

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$data = "DELETE from internship where id = $id";
	$delete = mysqli_query($con,$data);

	if ($delete)
	{
		header("Location:display_internship.php");
	}
}
?>