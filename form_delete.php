<?php
include "dbcon.php";

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$data = "DELETE from form where id = $id";
	$delete = mysqli_query($con,$data);

	if ($delete)
	{
		header("Location:form_display.php");
	}
}
?>