<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
</head>
<body>
<div class="container">
 <form method="post" action="insert.php">
 	<h1>ADD ACCOUNT</h1>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" required="" placeholder="Enter Name">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" required="" placeholder="Enter Email">
	</div>
	<div class="form-group">
		<label>Current Balance</label>
		<input type="number" name="balance" class="form-control" required="">
	</div>
	<button value="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</body>
</html>