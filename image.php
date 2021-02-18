<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
<form method="post" action="insertimage.php" enctype="multipart/form-data">
	<div class="form-group">
		<label>name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div>
		<label>Image</label>
		<input type="file" name="image" class="form-control" >
	</div><br>
	<input type="submit" name="submit" value="submit" class="btn btn-info">
</form>
</div>
</body>
</html>