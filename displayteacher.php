<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
	    table,tr,th,td{
			border:2px solid;
			border-collapse: collapse;
			width: 400px;
			height: 50px; 
		}
		tr{
			background: black;

		}
		th{
			background: #c44569;
		}
		td{
			background: #34495e;
			color: wheat;
		}
		.btn
	    {
	        text-align: center;
	        background-color: #d49f4f;
            border-color: #d49f4f;
            padding: 5px;
        }
	</style>
</head>
<body>
<div class="container">
<table class="table table-bordered">
		<tr>
			<th>S.NO</th>
			<th>Name</th>
			<th>City</th>
			<th>Address</th>
			<th>College</th>
			<th>Gender</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
         
         <?php
               
          include "dbcon.php";
          $data =  "select * from teacher";
          $result = mysqli_query($con,$data);
          while ( $a = mysqli_fetch_array($result)) {



         ?>
        <tr>
           <td><?php echo $a['id'] ?></td>
		   <td><?php echo $a['name'] ?></td>
		   <td><?php echo $a['city'] ?></td>
		   <td><?php echo $a['address'] ?></td>
		   <td><?php echo $a['college']?></td>
		   <td><?php echo $a['gender']?></td>
		   <td><img style="width: 100px " src="<?php echo $a['image'] ?>"></td>
		  

		    <td>
        		<a class="btn" style="background: #ffeaa7;" href="teacheredit.php? id=<?php echo $a['id'] ?>">Edit</a>
        		<a class="btn"style="background: #00cec9;color: wheat;" href="teacherdelete.php? id=<?php echo $a['id'] ?>">Delete</a>
        	
        	</td>

        	</td>
        </tr>
        <?php } ?>
        

	</table>
</div>
</body>
</html>