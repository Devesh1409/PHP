<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
</head>
<body>

<div class="container">
<center><h1> FORM </h1></center>
<form method="post" action="insertform.php">
	<div class="form-group">
		<label> Name</label>
		<input type="text" name="name" required="" class="form-control" placeholder="Enter Name">
    </div>

    <div class="form-group">
		<label> Email</label>
		<input type="text" name="email" required="" class="form-control" placeholder="Enter Email">
	</div>


	<div class="form-group">
		<label> Education:</label>
		<input type="checkbox" name="education[]" value="10th">10th
		<input type="checkbox" name="education[]" value="12th">12th
		<input type="checkbox" name="education[]" value="B.Tech">B.Tech
	</div>

	<button value="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</body>
</html>