<?php 
$link=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($link,"church");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Holy Communion</title><style>
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
	<font color="green" size="30" style="font-family:cooper;">MARRIAGE</font>
	</center>
	<br><br>
	<form name="form1" action="" method="post">
		<table id="customers" align="center" style="font-family:verdana;">
			<tr>
				<td>Enter RegNo</td>
				<td><input type="text" name="regno"></td>
			</tr>
			<tr>
				<td>Enter Bridegroom Name</td>
				<td><input type="text" name="men"></td>
			</tr>
			<tr>
				<td>Enter Groom Name</td>
				<td><input type="text" name="women"></td>
			</tr>
			<tr>
				<td>Enter his Date of Birth</td>
				<td><input type="text" name="hisdob"></td>
			</tr>
			<tr>
				<td>Enter his Father Name</td>
				<td><input type="text" name="hisfname"></td>
			</tr>
			<tr>
				<td>Enter his Mother Name</td>
				<td><input type="text" name="hismname"></td>
			</tr>
			<tr>
				<td>Enter her Date of Birth</td>
				<td><input type="text" name="herdob"></td>
			</tr>
			<tr>
				<td>Enter her Father Name</td>
				<td><input type="text" name="herfname"></td>
			</tr>
			<tr>
				<td>Enter her Mother Name</td>
				<td><input type="text" name="hermname"></td>
			</tr>
			<tr>
				<td>Enter Marriage Date</td>
				<td><input type="text" name="mdob"></td>
			</tr>
			<tr>
				<td>Enter Condition</td>
				<td><input type="text" name="con"></td>
			</tr>
			<tr>
				<td>Enter Presence of Marriage</td>
				<td><input type="text" name="pom"></td>
			</tr>
			<tr>
				<td>Enter Marriage Priest Name</td>
				<td><input type="text" name="mpname"></td>
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
	mysqli_query($link,"insert into marriage values('$_POST[regno]','$_POST[men]','$_POST[women]','$_POST[hisdob]','$_POST[hisfname]',  '$_POST[hismname]','$_POST[herdob]','$_POST[herfname]','$_POST[hermname]','$_POST[mdob]','$_POST[con]','$_POST[pom]','$_POST[mpname]')");
}

if (isset($_POST["submit2"]))
{
	mysqli_query($link,"delete from marriage where regno='$_POST[regno]'");
}

if (isset($_POST["submit3"]))
{
	mysqli_query($link,"update marriage set regno='$_POST[regno]' where regno='$_POST[regno]'");
}

if (isset($_POST["submit4"]))
{
	$res=mysqli_query($link,"select * from marriage");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "S.No"; echo "<th>";
		echo "<th>"; echo "Men"; echo "<th>";
		echo "<th>"; echo "Women"; echo "<th>";
		echo "<th>"; echo "His Date of Birth"; echo "<th>";
		echo "<th>"; echo "His Father Name"; echo "<th>";
		echo "<th>"; echo "His Mother Name"; echo "<th>";
		echo "<th>"; echo "Her Date of Birth"; echo "<th>";
		echo "<th>"; echo "Her Father Name"; echo "<th>";
		echo "<th>"; echo "Her Mother Name"; echo "<th>";
		echo "<th>"; echo "Marriage Date"; echo "<th>";
		echo "<th>"; echo "Condition"; echo "<th>";
		echo "<th>"; echo "Presence of Marriage"; echo "<th>";
		echo "<th>"; echo "Priest Name"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["men"]; echo "<td>";
		echo "<td>"; echo $row["women"]; echo "<td>";
		echo "<td>"; echo $row["hisdob"]; echo "<td>";
		echo "<td>"; echo $row["hisfname"]; echo "<td>";
		echo "<td>"; echo $row["hismname"]; echo "<td>";
		echo "<td>"; echo $row["herdob"]; echo "<td>";
		echo "<td>"; echo $row["herfname"]; echo "<td>";
		echo "<td>"; echo $row["hermname"]; echo "<td>";
		echo "<td>"; echo $row["mdob"]; echo "<td>";
		echo "<td>"; echo $row["con"]; echo "<td>";
		echo "<td>"; echo $row["pom"]; echo "<td>";
		echo "<td>"; echo $row["mpname"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}

if (isset($_POST["submit5"]))
{
	$res=mysqli_query($link,"select * from marriage where regno='$_POST[regno]'");
	echo "<table border=1 align=center id=customers>";
	echo "<tr>";
		echo "<th>"; echo "S.No"; echo "<th>";
		echo "<th>"; echo "Men"; echo "<th>";
		echo "<th>"; echo "Women"; echo "<th>";
		echo "<th>"; echo "His Date of Birth"; echo "<th>";
		echo "<th>"; echo "His Father Name"; echo "<th>";
		echo "<th>"; echo "His Mother Name"; echo "<th>";
		echo "<th>"; echo "Her Date of Birth"; echo "<th>";
		echo "<th>"; echo "Her Father Name"; echo "<th>";
		echo "<th>"; echo "Her Mother Name"; echo "<th>";
		echo "<th>"; echo "Marriage Date"; echo "<th>";
		echo "<th>"; echo "Condition"; echo "<th>";
		echo "<th>"; echo "Presence of Marriage"; echo "<th>";
		echo "<th>"; echo "Priest Name"; echo "<th>";
	echo "</tr>";
	while ($row=mysqli_fetch_array($res)) 
	{
		echo "<tr>";
		echo "<td>"; echo $row["regno"]; echo "<td>";
		echo "<td>"; echo $row["men"]; echo "<td>";
		echo "<td>"; echo $row["women"]; echo "<td>";
		echo "<td>"; echo $row["hisdob"]; echo "<td>";
		echo "<td>"; echo $row["hisfname"]; echo "<td>";
		echo "<td>"; echo $row["hismname"]; echo "<td>";
		echo "<td>"; echo $row["herdob"]; echo "<td>";
		echo "<td>"; echo $row["herfname"]; echo "<td>";
		echo "<td>"; echo $row["hermname"]; echo "<td>";
		echo "<td>"; echo $row["mdob"]; echo "<td>";		
		echo "<td>"; echo $row["con"]; echo "<td>";
		echo "<td>"; echo $row["pom"]; echo "<td>";
		echo "<td>"; echo $row["mpname"]; echo "<td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
<br><br><br><br><br><br><br><br><br><br>
</body>
</html>