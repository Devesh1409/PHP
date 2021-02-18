<?php
include 'dbcon.php';

if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
  $i = "SELECT * FROM internship WHERE id = $id";
  $result = mysqli_query($con,$i);

  $a = mysqli_fetch_array($result);
}

?>
<!-- update code -->
<?php

include 'dbcon.php';
if(isset($_POST['update']))
{


  echo $a= $_POST['name'];
  echo $b= $_POST['email'];
  echo $c= $_POST['number'];
  echo $d= $_POST['address'];
  echo $e= $_POST['gender'];
  echo $f= $_POST['college'];
  echo $g= $_POST['qualification'];
  echo $h= $_POST['branch'];
  echo $i= $_POST['semester'];
  echo $j= $_POST['internship'];
  
  $data = "UPDATE internship SET name = '$a',email='$b',mobile_number='$c',address='$d',gender='$e',college='$f',qualification='$g',branch='$h',semester='$i',internship_course='$j' where id= $id";
  $Update = mysqli_query($con,$data);

  if ($Update)
  {
  	header("Location:display_internship.php");//back to display
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
					<label>Mobile number:</label>
					<input type="number" name="number" class="form-control" value="<?php echo $a['mobile_number']?>">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" name="address" class="form-control"value="<?php echo $a['address']?>">
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
                         if ($a['college']=='RJIT')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>RJIT</option>
				   	<option
                      <?php
                         if ($a['college']=='ITM GOI')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>ITM GOI</option>
				   	<option 
                      <?php
                         if ($a['college']=='MITS')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>MITS</option>
				</select>
				</div>
				<div class="form-group">
					<label>Qualification:</label>
				   <select class="form-control" name="qualification" value="<?php echo $a['qualification']?>">
				   	<option>Select</option>
				   	<option
				   	  <?php
                         if ($a['qualification']=='B.TECH')
                          {
                         	echo "selected";
                          }




                       ?>

				   	>B.TECH</option>
				   	<option
				   	 <?php
                         if ($a['qualification']=='MCA')
                          {
                         	echo "selected";
                          }




                       ?>

				   	>MCA</option>
				   	<option
				   	 <?php
                         if ($a['qualification']=='BCA')
                          {
                         	echo "selected";
                          }




                       ?>


				   	>BCA</option>
				   	<option
				   	  <?php
                         if ($a['qualification']=='OTHERS')
                          {
                         	echo "selected";
                          }




                       ?>

				   	>OTHERS</option>
				</select>
				</div>
				<div class="form-group">
					<label>Branch:</label>
				   <select class="form-control" name="branch" value="">
				   	<option>Select</option>
				   	<option
				   	  <?php
                         if ($a['branch']=='CS')
                          {
                         	echo "selected";
                          }




                       ?>

				   	>CS</option>
				   	<option
                      <?php
                         if ($a['branch']=='IT')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>IT</option>
				   	<option
                      <?php
                         if ($a['branch']=='EC')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>EC</option>
				   	<option
                      <?php
                         if ($a['branch']=='OTHERS')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>OTHERS</option>
				</select>
				</div>
				<div class="form-group">
					<label>Semester:</label>
				   <select class="form-control" name="semester" value="">
				   	<option>Select</option>
				   	<option
                      <?php
                         if ($a['semester']=='1')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>1</option>
				   	<option
                      <?php
                         if ($a['semester']=='2')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>2</option>
				   	<option
                     <?php
                         if ($a['semester']=='3')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>3</option>
				   	<option
				   	 <?php
                         if ($a['semester']=='4')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>4</option>
				   	<option
				   	 <?php
                         if ($a['semester']=='5')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>5</option>
				   	<option
				   	 <?php
                         if ($a['semester']=='6')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>6</option>
				   	<option
				   	  <?php
                         if ($a['semester']=='7')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>7</option>
				   	<option
				   	  <?php
                         if ($a['semester']=='8')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>8</option>
				</select>
			    </div>
				<div class="form-group">
					<label>Internship courses:</label>
				   <select class="form-control" name="internship" value="">
				   	<option>Select</option>
				   	<option
				   	 <?php
                         if ($a['internship_course']=='Web Designing(45 days)')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>Web Designing(45 days)</option>
				   	<option
				   	 <?php
                         if ($a['internship_course']=='Web Development(90 days)')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>Web Development(90 days)</option>
				   	<option
				   	 <?php
                         if ($a['internship_course']=='Php')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>Php</option>
				   	<option
				   	 <?php
                         if ($a['internship_course']=='React JS')
                          {
                         	echo "selected";
                          }




                       ?>
				   	>React JS</option>
				   </select>
				</div>
				<input type="submit" name="update" value="update" class="btn btn-info">
        </form> 
    </div>
</div>		
</body>
</html>