<?php 
$link=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($link,"playersprofile");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
	#customers 
	{
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 60%;
	  height: 100%;
	}
	#customers td, #customers th 
	{
	  border: 1px solid #ddd;
	  padding: 8px;
	  text-align: center;
	}
	#customers tr:nth-child(even)
	{
		background-color: #f2f2f2;
	}
	#customers tr:hover 
	{
		background-color: #ddd;
	}
	#customers th 
	{
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #4CAF50;
		color: white;
	}
	.btn
	{
		padding: 10px;
		font-size: 15px;
		color: white;
		background: #5F9EA0;
		border: none;
		border-radius: 5px;
	}
</style>
	<!-- <link rel="stylesheet" type="text/css" href="stylemain.css"> -->
</head>
<body>
	<center>
	<font color="green" size="30" style="font-family:cooper;">Players Profile</font>
	</center>
	<br><br>
	<form name="form1" action="" method="post">
		<table id="customers" align="center" style="font-family:verdana;">
			<tr>
				<td>Register No</td>
				<td><input type="text" name="regno"></td>
			</tr>
			<tr>
				<td>Name of the Student</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Name of the Discipline</td>
				<td><input type="text" name="game"></td>
			</tr>
			<tr>
				<td>Father's Name</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td>Mother's Name</td>
				<td><input type="text" name="mname"></td>
			</tr>
			<tr>
				<td>Residential Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Phone No</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="text" name="dob"></td>
			</tr>
			<tr>
				<td>Name of the Course</td>
				<td><input type="text" name="course"></td>
			</tr>
			<tr>
				<td>Batch</td>
				<td><input type="text" name="batch"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit1" value="Insert" class="btn">
					<input type="submit" name="submit2" value="Delete" class="btn">
					<input type="submit" name="submit3" value="Update" class="btn">
					<input type="submit" name="submit4" value="Display" class="btn">
					<input type="submit" name="submit5" value="Search" class="btn">
				</td>
			</tr> 
		</table>
	</form>
	<br><br><br><br><br>
<?php 
if (isset($_POST["submit1"])) 
{
	mysqli_query($link,"insert into details values('$_POST[regno]','$_POST[name]','$_POST[game]','$_POST[fname]','$_POST[mname]','$_POST[address]',  '$_POST[phone]','$_POST[mail]','$_POST[dob]','$_POST[course]','$_POST[batch]')");
}

if (isset($_POST["submit2"]))
{
	mysqli_query($link,"delete from details where regno='$_POST[regno]'");
}

if (isset($_POST["submit3"]))
{
	mysqli_query($link,"update details set regno='$_POST[regno]' where regno='$_POST[regno]'");
}

if (isset($_POST["submit4"]))
{
	$res=mysqli_query($link,"select * from details");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "Register No"; echo "<th>";
		echo "<th>"; echo "Name of the Student"; echo "<th>";
		echo "<th>"; echo "Name of the Discipline"; echo "<th>";
		echo "<th>"; echo "Father's Name"; echo "<th>";
		echo "<th>"; echo "Mother's Name"; echo "<th>";
		echo "<th>"; echo "Residential Address"; echo "<th>";
		echo "<th>"; echo "Phone"; echo "<th>";
		echo "<th>"; echo "E-Mail"; echo "<th>";
		echo "<th>"; echo "Date of Birth"; echo "<th>";
		echo "<th>"; echo "Course"; echo "<th>";
		echo "<th>"; echo "Batch"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["name"]; echo "<td>";
		echo "<td>"; echo $row["game"]; echo "<td>";
		echo "<td>"; echo $row["fname"]; echo "<td>";
		echo "<td>"; echo $row["mname"]; echo "<td>";
		echo "<td>"; echo $row["address"]; echo "<td>";
		echo "<td>"; echo $row["phone"]; echo "<td>";
		echo "<td>"; echo $row["mail"]; echo "<td>";
		echo "<td>"; echo $row["dob"]; echo "<td>";
		echo "<td>"; echo $row["course"]; echo "<td>";
		echo "<td>"; echo $row["batch"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}

if (isset($_POST["submit5"]))
{
	$res=mysqli_query($link,"select * from details where regno='$_POST[regno]'");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "Register No"; echo "<th>";
		echo "<th>"; echo "Name of the Student"; echo "<th>";
		echo "<th>"; echo "Name of the Discipline"; echo "<th>";
		echo "<th>"; echo "Father's Name"; echo "<th>";
		echo "<th>"; echo "Mother's Name"; echo "<th>";
		echo "<th>"; echo "Residential Address"; echo "<th>";
		echo "<th>"; echo "Phone"; echo "<th>";
		echo "<th>"; echo "E-Mail"; echo "<th>";
		echo "<th>"; echo "Date of Birth"; echo "<th>";
		echo "<th>"; echo "Course"; echo "<th>";
		echo "<th>"; echo "Batch"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["name"]; echo "<td>";
		echo "<td>"; echo $row["game"]; echo "<td>";
		echo "<td>"; echo $row["fname"]; echo "<td>";
		echo "<td>"; echo $row["mname"]; echo "<td>";
		echo "<td>"; echo $row["address"]; echo "<td>";
		echo "<td>"; echo $row["phone"]; echo "<td>";
		echo "<td>"; echo $row["mail"]; echo "<td>";
		echo "<td>"; echo $row["dob"]; echo "<td>";
		echo "<td>"; echo $row["course"]; echo "<td>";
		echo "<td>"; echo $row["batch"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>