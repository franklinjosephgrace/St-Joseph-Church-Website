<?php 
$link=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($link,"church");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Hello</h2>
	<form name="form1" action="" method="post">
	<table>
		<tr>
			<td>Enter RegNo to View your Details</td>
			<td><input type="text" name="regno"></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit5" value="show" class="btn">
			</td>
		</tr>
	</table>
</form>
<?php 
if (isset($_POST["submit5"]))
{
	$res=mysqli_query($link,"select * from baptism where regno='$_POST[regno]'");
	echo "<table border=1 align=center>";
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
		echo "</tr>";
	}
	echo "</table>";
} 
?>
</body>
</html>
