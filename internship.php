<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
   <div class="row">	
        <form method="post" action="insertinternship.php">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label>Mobile number:</label>
					<input type="number" name="number" class="form-control">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" name="address" class="form-control">
				</div>
	            <div class="form-group">
					<label>Gender:</label>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">female
					<input type="radio" name="gender" value="other">others
				</div>
				<div class="form-group">
					<label>college:</label>
				   <select class="form-control" name="college">
				   	<option>Select</option>
				   	<option>ITM</option>
				   	<option>RJIT</option>
				   	<option>ITM GOI</option>
				   	<option>MITS</option>
				</select>
				</div>
				<div class="form-group">
					<label>Qualification:</label>
				   <select class="form-control" name="qualification">
				   	<option>Select</option>
				   	<option>B.TECH</option>
				   	<option>MCA</option>
				   	<option>BCA</option>
				   	<option>OTHERS</option>
				</select>
				</div>
				<div class="form-group">
					<label>Branch:</label>
				   <select class="form-control" name="branch">
				   	<option>Select</option>
				   	<option>CS</option>
				   	<option>IT</option>
				   	<option>EC</option>
				   	<option>OTHERS</option>
				</select>
				</div>
				<div class="form-group">
					<label>Semester:</label>
				   <select class="form-control" name="semester">
				   	<option>Select</option>
				   	<option>1</option>
				   	<option>2</option>
				   	<option>3</option>
				   	<option>4</option>
				   	<option>5</option>
				   	<option>6</option>
				   	<option>7</option>
				   	<option>8</option>
				</select>
			    </div>
				<div class="form-group">
					<label>Internship courses:</label>
				   <select class="form-control" name="internship">
				   	<option>Select</option>
				   	<option>Web Designing(45 days)</option>
				   	<option>Web Development(90 days)</option>
				   	<option>Php</option>
				   	<option>React JS</option>
				   </select>
				</div>
				<input type="submit" name="submit" class="btn btn-info">
        </form> 
    </div>
</div>		
</body>
</html>