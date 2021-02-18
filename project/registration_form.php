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
            color: wheat;
        }
    .btn1
	    {
	        text-align: left;
            padding: 5px;
            position: relative;
		    bottom: 37px;
		    left: 70px;
        }
    .d  {
          width: 500px;
          height: 570px; 
          background: #006266;
          background: url(https://www.legalzoom.com/sites/lz.com/files/articles/how_to_register_a_business.jpg);
        } 
    </style>
</head>
<body>
<section><br>
<div class="container d"><br><br>
<h1 class="text-center" style="margin-top: -35px;color: wheat;">USER</h1>
<form method="post">
	<div class="form-group">
	<label style="color: wheat;"> Name:</label>
	<input type="text" name="username" class="form-control">
	</div>

	<div class="form-group">
	<label style="color: wheat;"> Password:</label>
	<input type="password" name="password" class="form-control">
	</div>

	<div class="form-group">
	<label style="color: wheat;"> Email:</label>
	<input type="text" name="email" class="form-control">
	</div>
 

    <div class="form-group">
	<label style="color: wheat;"> Address:</label>
	<textarea type="text" name="address" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<label style="color: wheat;"> Phone Number:</label>
	<input type="number" name="number" class="form-control">
	</div>

	<input type="submit" name="submit" value="SIGNUP" class="btn btn-info">
	<a href="login.php"><p style="color: wheat;"class="btn1">SIGNIN</p></a>
	
</form>
</div>
</section>
</body>
</html>

<?php
include 'dbcon1.php';

if (isset($_POST['submit'])) 
{
	$a = $_POST['username'];
	$b = $_POST['password'];
	$c = $_POST['email'];
	$d = $_POST['address'];
	$e = $_POST['number'];

	$data = "INSERT into login_form(username,password,email,address,phone_number)values('$a','$b','$c','$d','$e')";

	$result = mysqli_query($con,$data);

	 if ($result) 
    {
    	echo "<script> alert('Registration Successfully')</script>"; # code...
    }
  
}
?>
}