<?php 
$link=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($link,"church");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Baptism</title><style>
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
	<font color="green" size="30" style="font-family:cooper;">DONATION</font>
	</center>
	<br><br>
	<form name="form1" action="" method="post">
		<table id="customers" align="center" style="font-family:verdana;">
			<tr>
				<td>Enter Roll No</td>
				<td><input type="text" name="regno"></td>
			</tr>
			<tr>
				<td>Enter Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Enter Date</td>
				<td><input type="text" name="date"></td>
			</tr>
			<tr>
				<td>Enter Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Enter Family Name</td>
				<td><input type="text" name="family"></td>
			</tr>
			<tr>
				<td>Enter Amount or Donation</td>
				<td><input type="text" name="donation"></td>
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
	mysqli_query($link,"insert into donation values('$_POST[regno]','$_POST[name]','$_POST[date]','$_POST[address]','$_POST[family]',  '$_POST[donation]')");
}

if (isset($_POST["submit2"]))
{
	mysqli_query($link,"delete from donation where regno='$_POST[regno]'");
}

if (isset($_POST["submit3"]))
{
	mysqli_query($link,"update donation set regno='$_POST[regno]' where regno='$_POST[regno]'");
}

if (isset($_POST["submit4"]))
{
	$res=mysqli_query($link,"select * from donation");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "Roll.No"; echo "<th>";
		echo "<th>"; echo "Name"; echo "<th>";
		echo "<th>"; echo "Date"; echo "<th>";
		echo "<th>"; echo "Address"; echo "<th>";
		echo "<th>"; echo "Family Name"; echo "<th>";
		echo "<th>"; echo "Amount or Donation"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["name"]; echo "<td>";
		echo "<td>"; echo $row["date"]; echo "<td>";
		echo "<td>"; echo $row["address"]; echo "<td>";
		echo "<td>"; echo $row["family"]; echo "<td>";
		echo "<td>"; echo $row["donation"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}

if (isset($_POST["submit5"]))
{
	$res=mysqli_query($link,"select * from donation where regno='$_POST[regno]'");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "Roll.No"; echo "<th>";
		echo "<th>"; echo "Name"; echo "<th>";
		echo "<th>"; echo "Date"; echo "<th>";
		echo "<th>"; echo "Address"; echo "<th>";
		echo "<th>"; echo "Family Name"; echo "<th>";
		echo "<th>"; echo "Amount or Donation"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["name"]; echo "<td>";
		echo "<td>"; echo $row["date"]; echo "<td>";
		echo "<td>"; echo $row["address"]; echo "<td>";
		echo "<td>"; echo $row["family"]; echo "<td>";
		echo "<td>"; echo $row["donation"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
<br><br><br><br><br><br><br><br><br><br>
</body>
</html>