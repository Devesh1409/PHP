<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<table class="table table-bordered">
	<tr>
		<th>username</th>
		<th>password</th>
		<th>action</th>
	</tr>

	<?php
        include "dbcon.php";
        $data = "SELECT * FROM user";
        $result = mysqli_query($con,$data);
	    while ($a= mysqli_fetch_array($result))
	    {
	    	
	    

	?>
	<tr>
		<td><?php echo $a['username'] ?></td>
		<td><?php echo $a['password'] ?></td>

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