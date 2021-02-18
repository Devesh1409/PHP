<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
	.btn
	    {
	        text-align: left;
            padding: 5px;
            margin-right: 1050px;
        }
    </style>
</head>
<body>
<div class="container">	
<form method="post" action="insertteacher.php" enctype="multipart/form-data">
	    <div class="form-group">
		<label>name:</label><br>
		<input type="text" name="n" placeholder="xyz" class="form-control">
	    </div>
	    <br>
		<div class="form-group">
		<label>city:</label><br>
		<input type="text" name="c" placeholder="city" class="form-control">
	     </div>
	     <br>
         
         <div class="form-group">
	    <label>address:</label><br>
		<input type="text" name="a" placeholder="address" class="form-control">
	     </div>
	     <br><br>
		
		<div class="form-group">
					<label>college:</label>
				   <select class="form-control" name="college" class="form-control">
				   	<option>Select</option>
				   	<option>ITM</option>
				   	<option>RJIT</option>
				   	<option>ITM GOI</option>
				   	<option>MITS</option>
				</select>
		</div>
		<div class="form-group">
					<label>Gender:</label>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">female
					<input type="radio" name="gender" value="other">others
		</div>
		<div>
		<label>Image</label>
		<input type="file" name="image" class="form-control" >
	</div><br>
		<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>