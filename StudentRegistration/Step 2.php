<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Step 2</title>
</head>
<body>
<center><table border>
	<form action="Step 3.php" method="GET">
	<h1>Student Registration Form (Step 1 of 6)</h1>
	<tr>
		<td id="name">Firstname</td>
		<td id="name">Middlename</td>
		<td id="name">Lastname</td>
	</tr>
	<tr>
		<td><input type="textbox" size="20"  name="first" id="name"></td>
		<td><input type="textbox" size="20"  name="middle" id="name"></td>
		<td><input type="textbox" size="20"  name="last" id="name"></td>
	</tr>
	<tr>
		<td id="name">Gender</td>
		<td id="name"><center><input type="radio" name="gender" value="Male">Male</center></td>
		<td id="name"><center><input type="radio" name="gender" value="Female">Female</center></td>
	</tr>
	<tr>
		<td colspan="3"><center><input type="submit" id="name" value="Next Step"></center></td>
		</tr>
	</form>
	</table>
</body>
</html>