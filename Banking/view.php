<?php
include 'dbcon.php';

if (isset($_GET['c_id'])) 
{
    $id = $_GET['c_id'];
  $data = "SELECT * FROM customer where c_id = $id";
  $result = mysqli_query($con,$data);
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
			background:  #34495e;
			color: wheat;
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
<div class="container">
	<h3> Customer Information</h3>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Number</th>
		<th>Action</th>
	</tr>
	<tr>
		<td><?php echo $a['c_id']?></td>
		<td><?php echo $a['name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['current_balance']?></td>
		 <td>
        	<a class="btn"style="background: #ffeaa7;" href="transfer.php?c_id=<?php echo $a['c_id'] ?>">Transfer</a>
        	
        	</td>
	</tr>
</table>
</div>
</body>
</html>