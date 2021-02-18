<?php
include 'dbcon.php';

if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
  $i = "SELECT * FROM registration WHERE id = $id";
  $result = mysqli_query($con,$i);

  $a = mysqli_fetch_array($result);
}

?>
<!-- update code -->
<?php
include 'dbcon.php';
 if(isset($_POST['update']))

{
    $a = $_POST['fname'];
    $b = $_POST['lname'];
    $c = $_POST['number'];
    $d = $_POST['email'];
    $e = $_POST['marks'];
    $f = $_POST['course'];
    $g = $_POST['gender'];

  $data = "UPDATE registration SET First_name = '$a',Last_name='$b',mobile_number='$c',email='$d',marks='$e',course='$f',gender='$g' where id= $id";
  $Update = mysqli_query($con,$data);

  if ($Update)
  {
  	header("Location:display_registration.php");//back to display
  }
}



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
    </style>
</head>
<body>
	
      <div class="container"><br>
	 <h1> <center>Pre Registration Form 2021-22</center></h1>
	  <form method="post" >
		<br>
		<br>
       
     
		<div class="form-group">
		<label>First Name</label>
		<input type="text" name="fname" required="" class="form-control" value="<?php echo $a['First_name']?>">
        </div>


		<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="lname" required="" class="form-control" value="<?php echo $a['Last_name']?>">
        </div>


        
		<div class="form-group">
		<label>Mobile Number</label>
		<input type="Number" name="number" required="" class="form-control" value="<?php echo $a['mobile_number']?>">
        </div>

        
		<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" required="" class="form-control" value="<?php echo $a['email']?>">
        </div>

        
		<div class="form-group">
		<label>10th Marks</label>
		<input type="Number" name="marks" required="" class="form-control" value="<?php echo $a['marks']?>">
        </div>

        <div class="form-group">
		<label>Course</label>
		<select class="form-control" name="course" required="required" >
			    <option>Select</option>
			   	<option
			   	    <?php
                         if ($a['course']=='B.Tech')
                          {
                         	echo "selected";
                          }
                    ?>
			   	>B.Tech</option>
			   	<option
			   	 <?php
                         if ($a['course']=='B.Arch')
                          {
                         	echo "selected";
                          }
                    ?>
			   	>B.Arch</option>
			   	<option
			   	 <?php
                         if ($a['course']=='M.C.A')
                          {
                         	echo "selected";
                          }
                    ?>
			   	>M.C.A</option>
			   	<option
			   	 <?php
                         if ($a['course']=='M.TECH')
                          {
                         	echo "selected";
                          }
                    ?>
			   	>M.Tech</option>
			   	<option
			   	 <?php
                         if ($a['course']=='OTHER')
                          {
                         	echo "selected";
                          }
                    ?>
			   	>OTHER</option>
		</select>
        </div>
        <div class="form-group">
				<label>Gender:</label>
				<br>
                <input type="radio" name="gender"  required="required" value="male"
                 <?php
                         if ($a['gender']=='male')
                          {
                         	echo "checked";
                          }




                     ?>
                >male
                <br>
                <input type="radio" name="gender"  required="required" value="female"
                 <?php
                         if ($a['gender']=='female')
                          {
                         	echo "checked";
                          }




                       ?>
                >female
                <br>
                <input type="radio" name="gender"  required="required" value="other"
                 <?php
                         if ($a['gender']=='other')
                          {
                         	echo "checked";
                          }




                       ?>
                >other
        </div>
			   <center><input type="submit" name="update" value="update" class="btn btn-info"></center>
	</form>
    </div>
</body>
</html>