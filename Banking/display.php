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
<table class="table table-bordered">
		<tr>
			<th>S.NO</th>
			<th>Name</th>
	        <th>Action</th>
		</tr>
         
         <?php
               
          include "dbcon.php";
          $data =  "SELECT * from customer";
          $result = mysqli_query($con,$data);
          while ( $a = mysqli_fetch_array($result)) {



         ?>
        <tr>
           <td><?php echo $a['c_id'] ?></td>
		   <td><?php echo $a['name'] ?></td>

		    <td>
        	<a class="btn"style="background: #ffeaa7;" href="view.php?c_id=<?php echo $a['c_id'] ?>">VIEW</a>
        	<a class="btn"style="background: #ffeaa7;" href="edit.php?c_id=<?php echo $a['c_id'] ?>">EDIT</a>
        	
        	</td>

        	</td>
        </tr>

     <!--    show.php?id=1 -->
        <?php } ?>
        

	</table>
</div>
</body>
</html>