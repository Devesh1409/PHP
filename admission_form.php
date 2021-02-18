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
          height: 1050px; 
          background: #006266;
          background: url(https://www.legalzoom.com/sites/lz.com/files/articles/how_to_register_a_business.jpg);
        } 
    </style>
</head>
<body>
<section><br>
<div class="container "><br><br>
<h1 class="text-center" style="margin-top: -35px;color: wheat;">USER</h1>
<form method="post">
	<div class="form-group">
	<label style="color: wheat;"> Name:</label>
	<input type="text" name="username" class="form-control">
	</div>

	<div class="form-group">
	<label style="color: wheat;"> Father Name:</label>
	<input type="text" name="fname" class="form-control">
	</div>

	<div class="form-group">
	<label style="color: wheat;"> Email:</label>
	<input type="text" name="email" class="form-control">
	</div>

	<div class="form-group">
	<label style="color: wheat;"> Address:</label>
	<textarea name="address" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<label style="color: wheat;"> City</label>
	<input type="text" name="city" class="form-control">
	</div>

	 <div class="form-group">
		<label style="color: wheat;">Gender:</label>
		<input type="radio" name="gender" value="male" style="color: wheat;">Male
		<input type="radio" name="gender" value="female" style="color: wheat;">female
		<input type="radio" name="gender" value="other" style="color: wheat;">others
	</div>

	<div class="form-group">
   	<label style="color: wheat;">college:</label>
	   <select class="form-control" name="college">
		   	<option style="color: wheat;">Select</option>
		   	<option style="color: wheat;">ITM</option>
		   	<option style="color: wheat;">RJIT</option>
		   	<option style="color: wheat;">ITM GOI</option>
		   	<option style="color: wheat;">MITS</option>
		</select>
	</div>

	<div class="form-group">
	<label style="color: wheat;"> Phone Number:</label>
	<input type="number" name="number" class="form-control">
	</div>

	<div class="form-group">
	<label style="color: wheat;"> 10th Marks:</label>
	<input type="number" name="tmark" class="form-control">
	</div>

	<div class="form-group">
	<label style="color: wheat;"> 12th Marks:</label>
	<input type="number" name="vmarks" class="form-control">
	</div>
    
    <div class="form-group">
	<label style="color: wheat;"> JEE MAINS:</label>
	<input type="number" name="jmarks" class="form-control">
	</div>



	<input type="submit" name="submit" value="SIGNUP" class="btn btn-info">
	
</form>
</div>
</section>
</body>
</html>

<?php
include 'dbcon.php';

if (isset($_POST['submit'])) 
{
	$a = $_POST['username'];
	$b = $_POST['password'];
	$c = $_POST['email'];
	$d = $_POST['number'];

	$data = "INSERT into login_form(username,password,email,phone_number)values('$a','$b','$c','$d')";

	$result = mysqli_query($con,$data);

	 if ($result) 
    {
    	echo "<script> alert('Registration Successfully')</script>"; # code...
    }  
}
?>
}