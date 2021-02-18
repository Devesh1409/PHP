<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
		td{
			background: #dfe6e9;
		}
		.btn
	    {
	        text-align: center;
	        background-color: #d49f4f;
            border-color: #d49f4f;
            padding: 0px;
        }
            .a      
          {
                background-color: #82ccdd;
          }
   	.navbar
      {
         background-image: black;
         padding: 0;
      }
    .navbar-brand img
      {
        height: 40px;
        padding-left: 20px;
      }
    .navbar-nav li
      {
        padding: 0 10px;
      }
    .navbar-nav li a
      {
        color: #fff!important;
        font-weight: 600;
        float: right;
        text-align: left;
      }
    .fa-bars
      {
        color: #fff;
        font-size: 30px !important;
      }
    .navbar-toggler
      {
        outline: none !important;

      }
    .border-box
        {
               border-style: solid;
               border-width: unset;
               border-color: #ef7e1e;
        }
    .ad
          {
          	position: relative;
          	right: 950px;
          }
	</style>
</head>
<body>
	<section> 
        <nav class="navbar navbar-expand-md navbar-dark fixed-top a">    

        <a href="" class="navbar-brand">

       </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#a">

            <span class="navbar-toggler-icon"></span>
   
            </button>
            
            <div class="collapse navbar-collapse" id="a">
        
        <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a href="dashborad.php" class="nav-link ">Dashborad</a></li>
          <li class="nav-item">

        <a href="logout.php" class="nav-link border-box">LOGOUT
          <li class="nav-item"></li></a>


          	</ul> 
</div>
    </div>
     
</nav><br><br>
<div class="container">

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Father Name</th>
		<th>Email</th>
		<th>address</th>
		<th>City</th>
		<th>Gender</th>
		<th>Number</th>
		<th>College</th>
		<th>10th Mark</th>
		<th>12th Mark</th>
		<th>Jee Main</th>
		<th>action</th>
	</tr>

	<?php
        include "dbcon1.php";
        $data = "SELECT * FROM addmission";
        $result = mysqli_query($con,$data);
	    while ($a= mysqli_fetch_array($result))
	    {
	    	
	    

	?>
	<tr>
		<td><?php echo $a['id']?></td>
		<td><?php echo $a['name'] ?></td>
		<td><?php echo $a['father_name'] ?></td>
		<td><?php echo $a['email'] ?></td>
		<td><?php echo $a['address'] ?></td>
		<td><?php echo $a['city'] ?></td>
		<td><?php echo $a['gender'] ?></td>
		<td><?php echo $a['phone_number'] ?></td>
		<td><?php echo $a['college'] ?></td>
		<td><?php echo $a['10th_mark'] ?></td>
		<td><?php echo $a['12th_mark'] ?></td>
		<td><?php echo $a['jee_main'] ?></td>
		<td>
			<a class="btn" style="background: #ffeaa7;" href="show.php?id=<?php echo $a['id']?>">show</a>
			<!-- <a class="btn" style="background: #00cec9;color: wheat;" href="edit.php?id=<?php echo $a['id']?>">edit</a>
			<a class="btn" style="background: #d63031;color: wheat;" href="delete.php?id=<?php echo $a['id']?>">delete</a> -->
		</td>
	</tr>
<?php } ?>
</table>
</div>
</body>
</html>