<?php
include 'dbcon.php';

if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
  $i = "SELECT * FROM teacher WHERE id = $id";
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
   $b= $_POST['city'];
   $c= $_POST['address'];
   $d= $_POST['college'];
   $e= $_POST['gender'];
   $filename = $_FILES['image']['name'];
   $tmpname = $_FILES['image']['tmp_name'];

   $file = "upload/".$filename;
    
    // print_r($file); 

    move_uploaded_file($tmpname, $file);  
$data = "UPDATE teacher SET name = '$a',city='$b',address='$c',college='$d',gender= '$e',image='$file' where id= $id";
$Update = mysqli_query($con,$data);

  if ($Update)
  {
  	header("Location:displayteacher.php");//back to display
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
					<label>City:</label>
					<input type="text" name="c" class="form-control" value="<?php echo $a['city']?>">
				</div>

			<div class="form-group">
					<label>Address:</label>
					<input type="text" name="a" class="form-control"value="<?php echo $a['address']?>">
				</div>

			<div class="form-group">
					<label>college:</label>
				   <select class="form-control" name="college" value="<?php echo $a['college']?>">
				   	<option>Select</option>
				   	<option
				   	 <?php
                         if ($a['college']=='ITM')
                          {
                         	echo "selected";
                          }




                       ?>


				   	>ITM</option>
				   	<option
                      <?php
                         if ($a['college']=='MITS')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>MITS</option>
				   	<option 
                      <?php
                         if ($a['college']=='RJITS')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>RJITS</option>

           <option 
                      <?php
                         if ($a['college']=='OTHERS')
                          {
                          echo "selected";
                          }




                       ?>
            >OTHERS</option>
				</select>
        </div>
        <div class="form-group">
          <label>Gender:</label>
          <input type="radio" name="gender" value="male"
             <?php
               if ($a['gender']=='male')
                {
                    echo "checked";
                }

                       ?>
                >Male
          <input type="radio" name="gender" value="female"
                      <?php
                         if ($a['gender']=='female')
                          {
                          echo "checked";
                          }




                       ?>


          >female
          <input type="radio" name="gender" value="other">other
        </div>
       <div class="form-group">
          <label>IMAGE:</label>
          <input type="file" name="image" class="form-control"value="<?php echo $a['image']?>">
        </div>
				
				
				<input type="submit" name="update" value="update" class="btn btn-info">
        </form> 
    </div>
</div>		
</body>
</html>