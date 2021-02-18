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
		tr{
			background: orange;

		}
		th{
			background: #c44569;
		}
		td{
			background: #ffaf40;
		}
		.btn
	    {
	        text-align: center;
	        background-color: #d49f4f;
            border-color: #d49f4f;
            padding: 5px;
        }
	</style>
</head>
<body>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Education</th>
		<th>action</th>
	</tr>

	<?php
        include "dbcon.php";
        $data = "SELECT * FROM form";
        $result = mysqli_query($con,$data);
	    while ($a= mysqli_fetch_array($result))
	    {
	    	
	    

	?>
	<tr>
		<td><?php echo $a['id']?></td>
		<td><?php echo $a['name'] ?></td>
		<td><?php echo $a['email'] ?></td>
		<td><?php echo $a['education'] ?></td>
		<td>
			<a class="btn" style="background: #ffeaa7;" href="show.php?id=<?php echo $a['id']?>">show</a>
			<a class="btn" style="background: #00cec9;color: wheat;" href="form_edit.php?id=<?php echo $a['id']?>">edit</a>
			<a class="btn" style="background: #d63031;color: wheat;" href="delete.php?id=<?php echo $a['id']?>">delete</a><!--show.php?id=1 -->
		</td>
	</tr>
<?php } ?>
</table>

</body>
</html>