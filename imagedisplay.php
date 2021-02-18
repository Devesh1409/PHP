<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<table class="table table-bordered">
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Image</th>
		<th>action</th>
	</tr>

	<?php
        include "dbcon.php";
        $data = "SELECT * FROM employee";
        $result = mysqli_query($con,$data);
	    while ($a= mysqli_fetch_array($result))
	    {
	    	
	    

	?>
	<tr>
		<td><?php echo $a['id'] ?></td>
		<td><?php echo $a['name'] ?></td>
		<td><?php echo $a['email'] ?></td>
		<td><img style="width: 100px;" src="<?php echo $a['image'] ?>"></td>
		<td>
			<a href="">edit</a>
			<a href="">delete</a>
			<a href="">show</a>
		</td>
	</tr>
<?php } ?>
</table>

</body>
</html>
