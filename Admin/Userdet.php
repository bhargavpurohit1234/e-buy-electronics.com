<?php session_start(); ?><html>
<head>
<title>User Detail</title>
<link href="../style1.css" rel="stylesheet" type="text/css">
</head>
<body>

<table border="2" bordercolor="#FFCC33" width="100%">
<tr>
	
	  <th width="30" > <h3> <b> User Name </b></h3></th> 
	  <th width="30" > <h3> <b> Password </b></h3></th> 
	  <th width="20" > <h3> <b> Fist Name</b></h3></th> 
	  <th width="20" > <h3> <b> Middle Name </b></h3></th> 
	  <th width="20" > <h3> <b> Last Name </b></h3></th> 
	  <th width="50" > <h3> <b> Email </b></h3></th> 
	  <th width="15" > <h3> <b> Phone No </b></h3></th> 
	  <th width="150" > <h3> <b> Address </b></h3></th> 
	  <th width="15" > <h3> <b> City </b></h3></th> 
	  <th width="15" > <h3> <b> State </b></h3></th> 
	  <th width="30" > <h3> <b> Country </b></h3></th> 
	  <th width="15" > <h3> <b> Pin </b></h3></th> 
	  <th width="10" > <h3> <b> Sex </b></h3></th> 
	  <th width="50" > <h3> <b> Education </b></h3></th> 
	  <th width="50" > <h3> <b> Industry </b></h3></th>


</tr>
<?
	include ("include/z_db.php");
	$r=mysql_query("select * from user_detail",$link); 
	$a=mysql_num_rows($r);
	$b=$a /5;
	for($i=0; $i<$b; $i++)
	{
		echo "<tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  	if($row[0]=="")
				break;
			
  
			echo "<tr nowrap='nowrap'><td width=50>$row[0]</td>";
			echo "<td width=50>$row[1]</td>";
			//echo "<td>$row[2]</td>";
			echo "<td width=100>$row[3]</td>";
			echo "<td>$row[4]</td>";
			echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
			echo "<td>$row[8]</td>";
			echo "<td>$row[9]</td>";
			echo "<td>$row[10]</td>";
			echo "<td>$row[11]</td>";
			echo "<td>$row[12]</td>";
			echo "<td>$row[13]</td>";
			echo "<td>$row[14]</td>";
			echo "<td>$row[15]</td></tr>";

  			//echo "<tr align=center><td colspan=2><a href='order.php?model=$name'>Order Now!</a></td></tr></table>";
  			//$pri="$row[4]";
  		
		}
		echo "</tr>";
	}
?>
<table align="center">
	<tr>
		<td><a href="AdminPerform.php"><img src="image/Back.gif"></a></td>
	</tr>
</table>
</b></table>
</body>
</html>