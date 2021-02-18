<?php
session_start();
?>


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
          height: 294px; 
          /*background: #B53471;*/
          background: url(https://www.systancia.com/wp-content/uploads/2019/06/les-dangers-du-social-login.jpg);
        } 
    </style>
</head>
<body>
<section><br>
<div class="container d"><br><br>
<h1 class="text-center" style="margin-top: -35px;color: wheat;">LOGIN</h1>
<form method="post">
	<div class="form-group">
	<label style="color: wheat;"> Email:</label>
	<input type="text" name="email" class="form-control" placeholder="Enter Email">
    </div>
    
    <div class="form-group">
	<label style="color: wheat;"> Password:</label>
	<input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>
	
	<input type="submit" name="login" value="SIGNIN" class="btn btn-info">
	<a href="registration_form.php"><p class="btn1">SIGNUP</p></a>

</form>
</div>
</section>
</body>
</html>

<?php
include 'dbcon1.php';

if (isset($_POST['login'])) 
{
	$a = $_POST['email'];
	$b = $_POST['password'];

	$data = "SELECT * FROM login_form WHERE email ='$a' && password ='$b' ";
    
    $result = mysqli_query($con,$data);

    $total = mysqli_num_rows($result);

    // echo $total;
    if ($total==1) 
    { 
    	$_SESSION['a'] = $a;
        header("Location:dashborad.php"); # code...
    }
    else
    {
    	echo "<script> alert('please check your username or password')</script>";
    }
}



?>