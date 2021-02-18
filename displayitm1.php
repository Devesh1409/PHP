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
		<th>class</th>
		<th>city</th>
		<th>address</th>
		<th>phone number</th>
		<th>branch</th>
		<th>college</th>
		<th>action</th>
	</tr>

	<?php
        include "dbcon.php";
        $data = "SELECT * FROM itm1";
        $result = mysqli_query($con,$data);
	    while ($a= mysqli_fetch_array($result))
	    {
	    	
	    

	?>
	<tr>
		<td><?php echo $a['name'] ?></td>
		<td><?php echo $a['class'] ?></td>
		<td><?php echo $a['city'] ?></td>
		<td><?php echo $a['address'] ?></td>
		<td><?php echo $a['phone'] ?></td>
		<td><?php echo $a['branch'] ?></td>
		<td><?php echo $a['college'] ?></td>
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