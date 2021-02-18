<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<table class="table table-bordered">
	<tr>
		<th>name</th>
		<th>tea</th>
		<th>address</th>
		<th>phone</th>
		<th>action</th>
	</tr>

	<?php
        include "dbcon.php";
        $data = "SELECT * FROM tea";
        $result = mysqli_query($con,$data);
	    while ($a= mysqli_fetch_array($result))
	    {
	    	
	    

	?>
	<tr>
		<td><?php echo $a['name'] ?></td>
		<td><?php echo $a['tea'] ?></td>
		<td><?php echo $a['address'] ?></td>
		<td><?php echo $a['phone'] ?></td>
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