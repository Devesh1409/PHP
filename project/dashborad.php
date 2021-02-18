<?php
include 'session.php';
?>

<?php
include 'dbcon1.php';
$a = $_SESSION['a'];
$data = "SELECT * FROM login_form WHERE email = '$a'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>	 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
<style>
    .a      
          {
                background-color: #82ccdd;
          }
   	.navbar
      {
         background-image: black;
         padding: 0;
      }
    .navbar-brand img
      {
        height: 40px;
        padding-left: 20px;
      }
    .navbar-nav li
      {
        padding: 0 10px;
      }
    .navbar-nav li a
      {
        color: #fff!important;
        font-weight: 600;
        float: right;
        text-align: left;
      }
    .fa-bars
      {
        color: #fff;
        font-size: 30px !important;
      }
    .navbar-toggler
      {
        outline: none !important;

      }
    .border-box
        {
               border-style: solid;
               border-width: unset;
               border-color: #ef7e1e;
        }
    .ad
          {
          	position: relative;
          	right: 950px;
          }
</style>
</head>
<body>
<section> 
        <nav class="navbar navbar-expand-md navbar-dark fixed-top a">    

        <a href="" class="navbar-brand">

       </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#a">

            <span class="navbar-toggler-icon"></span>
   
            </button>
            
            <div class="collapse navbar-collapse" id="a">
        
        <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a href="display.php" class="nav-link ">DISPLAY</a></li>
          <li class="nav-item">

        <a href="logout.php" class="nav-link border-box">LOGOUT
          <li class="nav-item"></li></a>


          	</ul> 
</div>
    </div>
     
</nav>

<section><br>
<div class="container  "><br><br>
 <div class="col-md-2"></div>
  <div class="col-md-8">
       <div class="card shadow" style="position: relative;left: 200px; background: #ccae62;">
       <div class="card-body"><br>
<u style="color: wheat;"><h1 class="text-center" style="margin-top: -35px;color: wheat;">USER</h1></u>
<form method="post">
	<div class="form-group">
	<i class="fa fa-user"></i>
	<label > Name:</label>
	<input type="text" name="username" class="form-control" value="<?php echo $e['username']?>">
	</div>
    
    <div class="form-group">
    <i class="fa fa-users"></i>
	<label > Father Name:</label>
	<input type="text" name="fname" class="form-control">
	</div>
	
	<div class="form-group">
	<i class="fa fa-envelope"></i>
	<label > Email:</label>
	<input type="text" name="email" class="form-control" value="<?php echo $e['email']?>">
	</div>

	<div class="form-group">
	<i class="fa fa-address-book"></i>
	<label > Address:</label>
	<textarea name="address" class="form-control"  ><?php echo $e['address']?></textarea>
	</div>

	
	<div class= "form-group" >
	<i class="fa fa-city"></i>
	<label > City</label>
	<input type="text" name="city" class="form-control" >
	</div>

	 <div class="form-group">
		<label >Gender:</label>
		<input type="radio" name="gender" value="male" ><i class="fa fa-male"></i>
		<input type="radio" name="gender" value="female" ><i class="fa fa-female"></i>
	</div>

	<div class="form-group">
    <i class="fa fa-phone" aria-hidden="true"></i>
	<label > Phone Number:</label>
	<input type="number" name="number" class="form-control" value="<?php echo $e['phone_number']?>">
	</div>

	<div class="form-group">
	<i class="fa fa-university"></i>
   	<label >college:</label>
	   <select class="form-control" name="college">
		   	<option >Select</option>
		   	<option >ITM</option>
		   	<option >RJIT</option>
		   	<option >ITM GOI</option>
		   	<option >MITS</option>
		</select>
	</div>

	

	<div class="form-group">
	<label > 10th Marks:</label>
	<input type="number" name="tmark" class="form-control">
	</div>

	<div class="form-group">
	<label > 12th Marks:</label>
	<input type="number" name="vmark" class="form-control">
	</div>
    
    <div class="form-group">
	<label > JEE MAINS:</label>
	<input type="number" name="jmark" class="form-control">
	</div>
	<input type="submit" name="submit" value="Submit" class="btn btn-info">	
</form>
 <div class="col-md-2"></div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>

<?php
include 'dbcon1.php';
if (isset($_POST['submit']))
 {
	$a = $_POST['username'];
    $b = $_POST['fname'];
	$c = $_POST['email'];
	$d = $_POST['address'];
    $e = $_POST['city'];
	$f = $_POST['gender'];
	$g = $_POST['number'];
	$h = $_POST['college'];
	$i = $_POST['tmark'];
	$j = $_POST['vmark'];
	$k = $_POST['jmark'];

    $data = "INSERT INTO addmission(name,father_name,email,address,city,gender,phone_number,college,10th_mark,12th_mark,jee_main)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
	$result = mysqli_query($con,$data);

	if ($result) 
	{
		header("Location:display.php");
	}
  
}
?>