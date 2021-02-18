<?php
include 'dbcon.php';

if (isset($_GET['c_id'])) 
{
    $id=$_GET['c_id'];
  $i = "SELECT * FROM customer WHERE id = $id";
  $result = mysqli_query($con,$i);

  $a = mysqli_fetch_array($result);
}

?>
<!-- update code -->
<?php

include 'dbcon.php';
if(isset($_POST['update']))
{


   $a= $_POST['name'];
   $b= $_POST['email'];
    
$data = "UPDATE customer SET name = '$a',email='$b' where c_id= $id";
$Update = mysqli_query($con,$data);

  if ($Update)
  {
  	header("Location:display.php");//back to display
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
   <div class="row">	
        <form method="post" >
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="n" class="form-control" value="<?php echo $a['name']?>">
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="c" class="form-control" value="<?php echo $a['email']?>">
				</div>				
				<input type="submit" name="update" value="update" class="btn btn-info">
        </form> 
    </div>
</div>		
</body>
</html>