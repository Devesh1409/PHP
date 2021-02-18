<?php
include 'dbcon.php';

if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
  $i = "SELECT * FROM form WHERE id = $id";
  $result = mysqli_query($con,$i);

  $a = mysqli_fetch_array($result);

   $c = $a['education'];

  $c = explode(",",$c);
}

?>
<!-- update code -->
<?php

include 'dbcon.php';
if(isset($_POST['update']))
{


   $a= $_POST['name'];
   $b= $_POST['email'];
   $c= $_POST['education'];


    $edu = implode(",",$c);  // <!-- immplode used to convert array to string-->
    echo $edu;   
  
$data = "UPDATE form SET name = '$a',email='$b',education='$edu' where id= $id";
$Update = mysqli_query($con,$data);

  if ($Update)
  {
    header("Location:form_display.php");//back to display
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
					<input type="text" name="name" class="form-control" value="<?php echo $a['name']?>">
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email" class="form-control" value="<?php echo $a['email']?>">
				</div>

			<div class="form-group">
					<label>Education:</label>
					<input type="checkbox" name="education[]" value="10th"
              <?php
            if(in_array("10th", $c))
            {
              echo "checked";
            } 
            ?>
          >10th
          <input type="checkbox" name="education[]" value="12th"
           <?php
            if(in_array("12th", $c))
            {
              echo "checked";
            } 
            ?>
          >12th
          <input type="checkbox" name="education[]" value="B.Tech"
           <?php
            if(in_array("B.Tech", $c))
            {
              echo "checked";
            } 
            ?>
          >B.Tech
				</div>

			
				
				
				<input type="submit" name="update" value="update" class="btn btn-info">
        </form> 
    </div>
</div>		
</body>
</html>