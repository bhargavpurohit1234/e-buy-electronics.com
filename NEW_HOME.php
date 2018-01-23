<html>
<head>
<title>Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="style1.css" rel="stylesheet" type="text/css">
</head>

<?php include("MENU.php");
include("connect.php");
?>
<form name="form" method="post" action="search.php">
<table width="62%" cellspacing="0">
  <tr>
    
	<td width="12%"><img src="images/Search1.gif" width="110" height="28"></td>
    <td width="15%"><label><input type="text" name="typeSearch"></label></td>
    <td width="4%"><label><input type="submit" name="butsearch" value="GO"></label></td>
    
	<td width="13%"><img src="images/Category1.gif" width="120" height="28"></td>
    <td width="5%"><label><? echo "<select name='cate'><option></option>";
	$r=mysql_query("select Category from Category",$link);
	while($row=mysql_fetch_array($r,MYSQL_NUM))
	{
			printf("<option>$row[0]</option>");
	}	
	echo "</select></label></td>"; ?>
    <? //<td width="4%"><label><input type="submit" name="searchcate" value="GO"></label></td> ?>
    
	<td width="13%"><img src="images/Company1.gif" width="118" height="28"></td>
    <td width="5%"><label><? echo "<select name='comp'><option></option>";
	$r=mysql_query("select Company from Company",$link);  
	while($row=mysql_fetch_array($r,MYSQL_NUM))
	{
			printf("<option>$row[0]</option>");
	}		
	echo "</select></label></td>"; ?>
    <td width="29%"><input type="submit" name="searchcomp" value="GO"></td>
  </tr>
</table>
</form>
<br><br>
<hr width='80%'></hr>


<?php
include("connect.php");
//.........................................Display TV
$r=mysql_query("select * from all_model where type='TV';",$link);
for($i=0; $i<1; $i++)
{
	echo "<table align='center'><tr>";
	for($j=0; $j<6; $j++)
	{
		$row=mysql_fetch_array($r);
			if($row[0]=="")
				break;
		 echo "<td><table>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[7].">".$row[7]."</a></td></tr>";
		 echo "<tr><td align='center'>".$row[9]."</a></td></tr>";
		 echo "</table></td>";
	}
	echo "</tr></table>";
}
echo "<form action='search.php' method='POST'><table align='center'><tr><td><input type='submit' name='moretv' value='VIEW MORE'></td></tr></table></form>";

echo "<hr width='80%'></hr>";
//.........................................Dispaly LCD
$r=mysql_query("select * from all_model where type='LCD';",$link);
for($i=0; $i<1; $i++)
{
	echo "<table align='center'><tr>";
	for($j=0; $j<6; $j++)
	{
		$row=mysql_fetch_array($r);
			if($row[0]=="")
				break;
		 echo "<td><table>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[7].">".$row[7]."</a></td></tr>";
		 echo "<tr><td align='center'>".$row[9]."</a></td></tr>";
		 echo "</table></td>";
	}
	echo "</tr></table>";
}
echo "<form action='search.php' method='POST'><table align='center'><tr><td><input type='submit' name='morelcd' value='VIEW MORE'></td></tr></table></form>";

echo "<hr width='80%'></hr>";
//..................................Display Washing Machine
$r=mysql_query("select * from all_model where type='Washing Machine';",$link);
for($i=0; $i<1; $i++)
{
	echo "<table align='center'><tr>";
	for($j=0; $j<6; $j++)
	{
		$row=mysql_fetch_array($r);
			if($row[0]=="")
				break;
		 echo "<td><table>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[7].">".$row[7]."</a></td></tr>";
		 echo "<tr><td align='center'>".$row[9]."</a></td></tr>";
		 echo "</table></td>";
	}
	echo "</tr></table>";
}
echo "<form action='search.php' method='POST'><table align='center'><tr><td><input type='submit' name='morewash' value='VIEW MORE'></td></tr></table></form>";

echo "<hr width='80%'></hr>";
//..............................Display Refrigerator
$r=mysql_query("select * from all_model where type='Refrigerator';",$link);
for($i=0; $i<1; $i++)
{
	echo "<table align='center'><tr>";
	for($j=0; $j<6; $j++)
	{
		$row=mysql_fetch_array($r);
			if($row[0]=="")
				break;
		 echo "<td><table>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[7].">".$row[7]."</a></td></tr>";
		 echo "<tr><td align='center'>".$row[9]."</a></td></tr>";
		 echo "</table></td>";
	}
	echo "</tr></table>";
}
echo "<form action='search.php' method='POST'><table align='center'><tr><td><input type='submit' name='moreref' value='VIEW MORE'></td></tr></table></form>";

echo "<hr width='80%'></hr>";
//...............................Display Air-Conditioner
$r=mysql_query("select * from all_model where type='Air Conditioner';",$link);
for($i=0; $i<1; $i++)
{
	echo "<table align='center'><tr>";
	for($j=0; $j<6; $j++)
	{
		$row=mysql_fetch_array($r);
			if($row[0]=="")
				break;
		 echo "<td><table>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[7].">".$row[7]."</a></td></tr>";
		 echo "<tr><td align='center'>".$row[9]."</a></td></tr>";
		 echo "</table></td>";
	}
	echo "</tr></table>";
}
echo "<form action='search.php' method='POST'><table align='center'><tr><td><input type='submit' name='moreair' value='VIEW MORE'></td></tr></table></form>";

echo "<hr width='80%'></hr>";
//...............................Display Laptop
/*$r=mysql_query("select * from all_model where type='Laptop';",$link);
for($i=0; $i<1; $i++)
{
	echo "<table align='center'><tr>";
	for($j=0; $j<6; $j++)
	{
		$row=mysql_fetch_array($r);
			if($row[0]=="")
				break;
		 echo "<td><table>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[7].">".$row[7]."</a></td></tr>";
		 echo "<tr><td align='center'>".$row[9]."</a></td></tr>";
		 echo "</table></td>";
	}
	echo "</tr></table>";
}
echo "<form action='search.php' method='POST'><table align='center'><tr><td><input type='submit' name='morelaptop' value='VIEW MORE'></td></tr></table></form>"; */

//echo "<hr width='80%'></hr>";
//...............................Display DVD Player
$r=mysql_query("select * from all_model where type='DVD Player';",$link);
for($i=0; $i<1; $i++)
{
	echo "<table align='center'><tr>";
	for($j=0; $j<6; $j++)
	{
		$row=mysql_fetch_array($r);
			if($row[0]=="")
				break;
		 echo "<td><table>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
		 echo "<tr><td align='center'><a href= All.php?model=".$row[7].">".$row[7]."</a></td></tr>";
		 echo "<tr><td align='center'>".$row[9]."</a></td></tr>";
		 echo "</table></td>";
	}
	echo "</tr></table>";
}
echo "<form action='search.php' method='POST'><table align='center'><tr><td><input type='submit' name='moredvd' value='VIEW MORE'></td></tr></table></form>";



?>

</html>