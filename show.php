<?php
include 'dbcon.php';

if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
  $i = "SELECT * FROM internship WHERE id = $id";
  $result = mysqli_query($con,$i);

  $a = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style>
	    table,tr,th,td{
			border:2px solid;
			border-collapse: collapse;
			width: 400px;
			height: 50px; 
		}
		tr:hover{
			background: orange;

		}
		th{
			background: #F97F51;
		}
		td{
			background: #9AECDB;
		}
		.btn
	    {
	        text-align: center;
	        background-color: #d49f4f;
            border-color: #d49f4f;
        }
	</style>
</head>
<body>


<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Number</th>
		<th>Address</th>
		<th>Gender</th>
		<th>College</th>
		<th>Qualification</th>
		<th>Branch</th>
		<th>Semester</th>
		<th>Internship</th>
	</tr>
	<tr>
		<td><?php echo $a['id']?></td>
		<td><?php echo $a['name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['mobile_number']?></td>
		<td><?php echo $a['address']?></td>
		<td><?php echo $a['gender'] ?></td>
		<td><?php echo $a['college'] ?></td>
		<td><?php echo $a['qualification'] ?></td>
		<td><?php echo $a['branch'] ?></td>
		<td><?php echo $a['semester'] ?></td>
		<td><?php echo $a['internship_course'] ?></td>

	</tr>
</table>
</body>
</html>