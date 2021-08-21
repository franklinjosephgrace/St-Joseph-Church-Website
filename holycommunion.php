<?php 
$link=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($link,"church");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Holy Communion</title>
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
	<img src="images/stj.jpg" alt="" height="100%" width="100%"/>
	<br>
	<button class="btn"><h3><a href="admin.php">Home</a></h3></button>
	<center>
	<font color="green" size="30" style="font-family:cooper;">HOLY COMMUNION</font>
	</center>
	<br><br>
	<form name="form1" action="" method="post">
		<table id="customers" align="center" style="font-family:verdana;">
			<tr>
				<td>Enter RegNo</td>
				<td><input type="text" name="regno"></td>
			</tr>
			<tr>
				<td>Enter Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Enter Date of Birth</td>
				<td><input type="text" name="dob"></td>
			</tr>
			<tr>
				<td>Enter Father Name</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td>Enter Mother Name</td>
				<td><input type="text" name="mname"></td>
			</tr>
			<tr>
				<td>Enter Baptism Father Name</td>
				<td><input type="text" name="bfname"></td>
			</tr>
			<tr>
				<td>Enter Baptism Mother Name</td>
				<td><input type="text" name="bmname"></td>
			</tr>
			<tr>
				<td>Enter Baptism Date</td>
				<td><input type="text" name="bdob"></td>
			</tr>
			<tr>
				<td>Enter Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Enter Baptized Priest Name</td>
				<td><input type="text" name="bpname"></td>
			</tr>
			<tr>
				<td>Enter Holy Communion Date</td>
				<td><input type="text" name="hcdob"></td>
			</tr>
			<tr>
				<td>Enter Holy Communion Place</td>
				<td><input type="text" name="hcplace"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit1" value="Insert" class="btn">
					<input type="submit" name="submit2" value="Delete" class="btn">
					<!-- <input type="submit" name="submit3" value="Update" class="btn"> -->
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
	mysqli_query($link,"insert into holycommunion values('$_POST[regno]','$_POST[name]','$_POST[dob]','$_POST[fname]','$_POST[mname]',  '$_POST[bfname]','$_POST[bmname]','$_POST[bdob]','$_POST[address]','$_POST[bpname]','$_POST[hcdob]','$_POST[hcplace]')");
}

if (isset($_POST["submit2"]))
{
	mysqli_query($link,"delete from holycommunion where regno='$_POST[regno]'");
}

if (isset($_POST["submit3"]))
{
	mysqli_query($link,"update holycommunion set regno='$_POST[regno]' where regno='$_POST[regno]'");
}

if (isset($_POST["submit4"]))
{
	$res=mysqli_query($link,"select * from holycommunion");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "S.No"; echo "<th>";
		echo "<th>"; echo "Name"; echo "<th>";
		echo "<th>"; echo "Date of Birth"; echo "<th>";
		echo "<th>"; echo "Father Name"; echo "<th>";
		echo "<th>"; echo "Mother Name"; echo "<th>";
		echo "<th>"; echo "Baptism Father Name"; echo "<th>";
		echo "<th>"; echo "Baptism Mother Name"; echo "<th>";
		echo "<th>"; echo "Baptism Date"; echo "<th>";
		echo "<th>"; echo "Address"; echo "<th>";
		echo "<th>"; echo "Baptized Priest Name"; echo "<th>";
		echo "<th>"; echo "Holy Communion Date"; echo "<th>";
		echo "<th>"; echo "Holy Communion Place"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["name"]; echo "<td>";
		echo "<td>"; echo $row["dob"]; echo "<td>";
		echo "<td>"; echo $row["fname"]; echo "<td>";
		echo "<td>"; echo $row["mname"]; echo "<td>";
		echo "<td>"; echo $row["bfname"]; echo "<td>";
		echo "<td>"; echo $row["bmname"]; echo "<td>";
		echo "<td>"; echo $row["bdob"]; echo "<td>";
		echo "<td>"; echo $row["address"]; echo "<td>";
		echo "<td>"; echo $row["bpname"]; echo "<td>";
		echo "<td>"; echo $row["hcdob"]; echo "<td>";
		echo "<td>"; echo $row["hcplace"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}

if (isset($_POST["submit5"]))
{
	$res=mysqli_query($link,"select * from holycommunion where regno='$_POST[regno]'");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "S.No"; echo "<th>";
		echo "<th>"; echo "Name"; echo "<th>";
		echo "<th>"; echo "Date of Birth"; echo "<th>";
		echo "<th>"; echo "Father Name"; echo "<th>";
		echo "<th>"; echo "Mother Name"; echo "<th>";
		echo "<th>"; echo "Baptism Father Name"; echo "<th>";
		echo "<th>"; echo "Baptism Mother Name"; echo "<th>";
		echo "<th>"; echo "Baptism Date"; echo "<th>";
		echo "<th>"; echo "Address"; echo "<th>";
		echo "<th>"; echo "Baptized Priest Name"; echo "<th>";
		echo "<th>"; echo "Holy Communion Date"; echo "<th>";
		echo "<th>"; echo "Holy Communion Place"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["name"]; echo "<td>";
		echo "<td>"; echo $row["dob"]; echo "<td>";
		echo "<td>"; echo $row["fname"]; echo "<td>";
		echo "<td>"; echo $row["mname"]; echo "<td>";
		echo "<td>"; echo $row["bfname"]; echo "<td>";
		echo "<td>"; echo $row["bmname"]; echo "<td>";
		echo "<td>"; echo $row["bdob"]; echo "<td>";
		echo "<td>"; echo $row["address"]; echo "<td>";
		echo "<td>"; echo $row["bpname"]; echo "<td>";		
		echo "<td>"; echo $row["hcdob"]; echo "<td>";
		echo "<td>"; echo $row["hcplace"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
<br><br><br><br><br><br><br><br><br><br>
</body>
</html>