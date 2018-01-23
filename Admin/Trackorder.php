<?php session_start(); ?>
<html>
<head>
<title>Order Detail</title>
<link href="../style1.css" rel="stylesheet" type="text/css">
</head>
<body>

	
	<table border="2" bordercolor="#FFCC33" width="100%">
	<tr>
	
	  <th width="30"> <h3> <b> User Name </b></h3></th> 
	  <th width="30"> <h3> <b> EMI </b></h3></th> 
	  <th width="20"> <h3> <b> Quantity</b></h3></th> 
	  <th width="20"> <h3> <b> Model </b></h3></th> 
	  <th width="20"> <h3> <b> Price </b></h3></th> 
	  <th width="50"> <h3> <b> Type </b></h3></th> 
	  <th width="15"> <h3> <b> Company </b></h3></th> 
	  <th width="150"> <h3> <b> Warranty </b></h3></th> 
	  <th width="15"> <h3> <b> Shipping Time </b></h3></th> 
	  <th width="15"> <h3> <b> Order Date </b></h3></th> 
	  <th width="30"> <h3> <b> Delivery Date </b></h3></th> 
	  <th width="30"> <h3> <b> Total Price </b></h3></th>
	  <th width="30"> <h3> <b> Delete </b></h3></th> 
	</tr>
<?
	require "check.php";
	include("include/z_db.php");
	$select=mysql_query("select * from order_detail",$link); 
		
	while($row=mysql_fetch_array($select))
	{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>".$row[7]."</td>";
		echo "<td>".$row[8]."</td>";
		echo "<td>".$row[9]."</td>";
		$odate=$row[9];
		echo "<td>".$row[10]."</td>";
		$ddate=$row[10];
		echo "<td>".$row[11]."</td>";
		echo "<td><form action='deleteorder.php' method='GET'><input type='submit' name='deleteorder' value='DELETE'>
					<input type='hidden' name='odate' value='".$odate."'><input type='hidden' name='ddate' value='".$ddate."'></form></td>";
		echo "</tr>";
	}
	echo "</table>";
?>

<table align="center">
	<tr>
		<td><a href="AdminPerform.php"><img src="image/Back.gif"></a></td>
	</tr>
</table>
</body>
</html>