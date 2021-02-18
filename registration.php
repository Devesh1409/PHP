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
	  <form method="post" action="insertregistration.php">
		<br>
		<br>
       
     
		<div class="form-group">
		<label>First Name</label>
		<input type="text" name="fname" required="" class="form-control" placeholder="First Name">
        </div>


		<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="lname" required="" class="form-control" placeholder="Enter Last Name">
        </div>


        
		<div class="form-group">
		<label>Mobile Number</label>
		<input type="Number" name="number" required="" class="form-control" placeholder="Enter Mobile No.(10 Digits)">
        </div>

        
		<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" required="" class="form-control" placeholder="Enter Email">
        </div>

        
		<div class="form-group">
		<label>10th Marks</label>
		<input type="Number" name="marks" required="" class="form-control" placeholder="Enter marks(%) out of 100">
        </div>

        <div class="form-group">
		<label>Course</label>
		<select class="form-control" name="course" required="required">
			    <option>Select Course type</option>
			   	<option>B.Tech</option>
			   	<option>B.Arch</option>
			   	<option>M.C.A</option>
			   	<option>M.Tech</option>
			   	<option>OTHER</option>
		</select>
        </div>
        <div class="form-group">
				<label>Gender:</label>
				<br>
                <input type="radio" name="gender"  required="required" value="male">male
                <br>
                <input type="radio" name="gender"  required="required" value="female">female
                <br>
                <input type="radio" name="gender"  required="required" value="other">other
        </div>
			   <center><input type="submit" name="submit" value="SUBMIT" class="btn btn-info"></center>
			   
		     <center><a href="display_registration.php"><h3>Click Here To See Pre Register Students</h3></a></center>
	</form>
    </div>
</body>
</html>