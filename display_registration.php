<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
	    table,tr,th,td{
			border:2px solid;
			border-collapse: collapse;
			
		}
		tr{
			background: white;

		}
		th{
			background:#0984e3;
		}
		td:hover{
			background: #dfe6e9 ;
		}
		.btn
	    {
	        text-align: center;
            border-color: #d49f4f;
            padding: 0px;
           
        }
	</style>




	</head>

<body>
<div class="container"><br>
<h1> <center>List of Pre-Registered Students</center></h1><br>
<table class="table table-bordered">
		<tr>
			<th>S.NO</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Mobile Number</th>
		    <th>Email</th>
		    <th>10th Marks</th>
		    <th>course</th> 
	        <th>gender</th>
	        <th>Action</th>
		</tr>
         
         <?php
               
          include "dbcon.php";
          $data =  "select * from registration";
          $result = mysqli_query($con,$data);
          while ( $a = mysqli_fetch_array($result)) {



         ?>
        <tr>
           <td><?php echo $a['id'] ?></td>
		   <td><?php echo $a['First_name'] ?></td>
		   <td><?php echo $a['Last_name'] ?></td>
		   <td><?php echo $a['mobile_number'] ?></td>
		   <td><?php echo $a['email'] ?></td>
		   <td><?php echo $a['marks'] ?></td>
		   <td><?php echo $a['course'] ?></td>
		   <td><?php echo $a['gender'] ?></td>

		    <td>
        	<a class="btn"style="background: #ffeaa7;" href="">SHOW</a>
        	<a class="btn" style="background: #00cec9;color: wheat;" href="edit1.php?id=<?php echo $a['id']?>">EDIT</a>
       		<a class="btn" style="background: #d63031;color: wheat;" href="delete1.php?id=<?php echo $a['id']?>">DELETE</a>
        	</td>

        	</td>
        </tr>

     <!--    show.php?id=1 -->
        <?php } ?>
        

	</table>
</div>
</body>
</html>