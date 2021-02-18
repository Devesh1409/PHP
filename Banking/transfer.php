<?php
include 'dbcon.php';

if(isset($_GET['c_id']))
{
    $id = $_GET['c_id'];
	$i = "SELECT * from customer where c_id = $id";
	$result = mysqli_query($con,$i);

	$a = mysqli_fetch_array($result);


}   
if(isset($_POST['pay']))
   {
     $am = $_POST['Amount'];
     $id = $_POST['c_id'];
     $data = "UPDATE customer set current_balance=current_balance+$am where c_id=$id";
     $result = mysqli_query($con,$data);
     if($result)
     {
     	echo '<script> alert ("Amount Transfer Successfully") </script>';
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
	        text-align: center;
            padding: 5px;
            width: 90px;
        }
    </style>
</head>
<body>
	
<div class="container">
	  <h1> <center> Transfer </center></h1>
	<form method="post" >
		<br>
		<br>

		<div class="form-group">
			<h4><?php echo $a['name']?> Select whom u want to tranfer</h4>
			<select name="c_id" class="form-control">
			<option value="0">Select</option>	
			<option value="1">Devesh Bhargav</option>
			<option value="2">Nitin Joshi</option>
			<option value="3">Ojas Mishra</option>
            </select>
		</div>
            
        <div class="form-group">
        	<label>Amount</label>
        	<input type="number" name="Amount" placeholder="Amount">
        </div>
     
        <input type="submit" name="pay" value="PAY" class="btn btn-info">
			   <br>
		       <br>		   
	</form>
</div>



</body>
</html>