<?php
include 'tasksession.php';
?>
<?php
include 'taskcon.php';
$a = $_SESSION['a'];
$data = "SELECT * FROM register WHERE name = '$a'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/3e0c251e14.js" crossorigin="anonymous"></script>

<style>

.navbar
{
   background-image: linear-gradient(to right,#61f913,#29B6F6);
   padding: 0;    
}
.web-logo
{
  position: relative;
  left: 18px;
  display: none;
  
}
.mob-logo 
{
  position: relative;
  left: 18px;
  display: block;
}
.navbar-nav li
{
	padding: 0 10px;
	color: #fff !important;;
	font-weight: 600;
	float: right;
	text-align: left;
}


</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light">
	
	<img src="image/download.png"  class="web-logo">
	<img src="image/download.png" style="width: 100px;"  class="mob-logo">

	    <div class="collapse navbar-collapse" id="a">
        
        <ul class="navbar-nav ml-auto">
      
        <li class="nav-item">

        <a href="taskdisplay.php" style="color: white;">Details</a></li>

        <li class="nav-item">

        <a href="tasklogin.php" style="color: white;">LogOut</a></li>
      
       </ul> 
</div>

</nav>
<!-- navbar end -->

<div class="container" style="margin-top: 100px;">
	<div class="row">
		<center><h1>ADMISSION FORM</h1></center>
		<div class="col-md-2"></div>
		<div class="col-md-8 Card Shadow">
			<form class="form-group" method="post">
			<i class="fa fa-user" aria-hidden="true"></i>
			Name:
			<input type="text" name="name" class="form-control" value="<?php echo $e['name']?>">
			<br><br>
			<i class="fa fa-envelope" aria-hidden="true"></i>
			Email:

			<input type="text" name="email" class="form-control" value="<?php echo $e['email']?>">
			<br><br>
			<i class="fa fa-phone" aria-hidden="true"></i>
			Phone Number:
			<input type="number" name="phone_no" class="form-control" value="<?php echo $e['phone_no']?>">
			<br><br>
			<i class="fa fa-user" aria-hidden="true"></i>
			Father Name:
			<input type="text" name="father_name" class="form-control">
			<br><br>
			10th Marks:
			<input type="number" name="10th_marks" class="form-control">
			<br><br>
			12th Marks:
			<input type="number" name="12th_marks" class="form-control">
			<br><br>
			JEE Mains:
			<input type="number" name="jee_mains" class="form-control">
			<br><br>
            College:
	        <select>
	        	<option>select</option>
	        	<option>Itm Goi</option>
	        	<option>Itm University</option>
	        </select>
	        <br><br>
	        Gender:
	        <input type="radio" name="gender" value="male">Male
	        <input type="radio" name="gender" value="female">Female
	        <br><br>
	        <i class="fa fa-location-arrow" aria-hidden="true"></i>
	        Address:
            <input type="text" name="address" class="form-control">
            <br><br>
            City:
            <input type="text" name="city" class="form-control">
            <br><br>
            <input type="submit" name="submit" value="submit"> 
		</form>	
		</div>
		<div class="col-md-2"></div>
		
	</div>
	
</div>



</body>
</html>

<?php
include 'taskcon.php';
if (isset($_POST['submit']))
 {
	$a = $_POST['name'];
	$b = $_POST['email'];
	$c = $_POST['phone_no'];
	$d = $_POST['father_name'];
	$e = $_POST['10th_marks'];
	$f = $_POST['12th_marks'];
	$g = $_POST['jee_mains'];
	$h = $_POST['college'];
	$i = $_POST['gender'];
	$j = $_POST['address'];
	$k = $_POST['city'];

	$data = "INSERT INTO dashboard(name,email,phone_no,father_name,10th_marks,12th_marks,jee_mains,college,gender,address,city)values('$a','$b','$c','$d','$e','$e','$f','$g','$h','$i','$j','$k')";
	$result = mysqli_query($con,$data);

	if ($result) 
	{
		echo "<script> alert('submitted succesfully')  </script>";
	}
    else
    {
    	echo "<script> alert('Please Fill all Data') </script>";
    }	
}
?>