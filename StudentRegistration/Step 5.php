<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Step 5</title>
</head>
<body>
<center><table border>
	<form action="Step 6.php" method="GET">
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
		<td colspan="3"  id="name">Birthday</td>
	</tr>
	<tr>
		<td id="name"><center>Month<select name="month">
			<option>January</option>
			<option>February</option>
			<option>March</option>
			<option>April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>October</option>
			<option>November</option>
			<option>December</option>
			</select></center>
		</td>
		<td id="name"><center>Day<select name="day">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
			</select></center>
		</td>
		<td id=""name""><center>Year<select name="year">
			<option>1990</option>
			<option>1991</option>
			<option>1992</option>
			<option>1993</option>
			<option>1994</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
			<option>1998</option>
			<option>1999</option>
			<option>2000</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			</select></center>
		</td>
	</tr>
	<tr>
		<td id="name">Program</td>
		<td colspan="2">
		<center><select name="program">
			<option> International Cookery </option>
			<option> Nursing Assistant</option>
			<option> Associate in Comp. Tech.</option>
			<option> Mass Comm. Tech.</option>
			<option> Office Management</option>
			<option> AB Broadcasting</option>
			<option> BS Info. Sys.</option>
			<option> BS Accounting Tech.</option>
			<option> BS Accountancy</option>
			</select></center>
		</td>
	</tr>
	<tr>
		<td colspan="3" id="name">
			<input type="radio" name="studentType" value="Full-scholar"> Full Scholar<br>
			<input type="radio" name="studentType" value="Partial-scholar"> Partial Scholar<br>
			<input type="radio" name="studentType" value="Payee"> Paying Student
		</td>
	</tr>
	<tr>
		<td colspan="3"><center><input type="submit" id="name" value="Next Step"></center></td>
		</tr>
	</form>
	</table>
</body>
</html>