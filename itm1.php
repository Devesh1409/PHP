<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="insertitm1.php">
		name:
		<br>
		<input type="text" name="name" placeholder="name">
		<br><br>

		class:
		<br>
		<input type="text" name="class" required="required" placeholder="class">
		<br><br>


        city:
		<br>
		<input type="text" name="city" required="required" placeholder="city">
        <br><br>


        address:
		<br>
		<input type="text" name="address" required="required" placeholder="address">
        <br><br>


        phone:
		<br>
		<input type="number" name="number" required="required" placeholder="number">
        <br><br>


        branch:
		<select class="form-control" name="branch" required="required">
			   	<option>IT</option>
			   	<option>CSE</option>
			   	<option>ME</option>
			   	<option>EC</option>
			</select>

        <br><br>
        college:
		<select class="form-control" name="college" required="required" >
			   	<option>ITM UNIVERSITY</option>
			   	<option>RJIT</option>
			   	<option>ITM GOI</option>
			   	<option>MITS</option>
			</select>

			<br><br>

	     <input type="submit" style="background: wheat;" name="submit" value="submit">
</form>

</body>
</html>