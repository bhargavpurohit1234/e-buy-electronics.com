
<html>
<head>
<title>Product</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript"></script>
</head>

<body>
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



<?php

include("connect.php");
if(isset($_POST['butsearch']))
{
	$prod=$_POST['typeSearch'];
	$r=mysql_query("select * from all_model where name='$prod' or type='$prod' or model='$prod';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
				
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as $prod";
	}
}
/*if(isset($_POST['searchcate']))
{
	$prod=$_POST['cate'];
	$r=mysql_query("select * from all_model where type='$prod';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as $prod";
	}
}*/
if(isset($_POST['searchcomp']))
{
	$cate=$_POST['cate'];
	$comp=$_POST['comp'];
	if($cate=="")
		$r=mysql_query("select * from all_model where name='$comp';",$link);
	else if($comp=="")
		$r=mysql_query("select * from all_model where type='$cate';",$link);
	else
		$r=mysql_query("select * from all_model where name='$comp' AND type='$cate';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no $cate in $comp";
	}
}
if(isset($_POST['moretv']))
{
	
	$r=mysql_query("select * from all_model where type='TV';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as TV";
	}
}
if(isset($_POST['morelcd']))
{
	
	$r=mysql_query("select * from all_model where type='LCD';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as LCD";
	}
}
if(isset($_POST['morewash']))
{
	
	$r=mysql_query("select * from all_model where type='Washing Machine';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as Washing Machine";
	}
}
if(isset($_POST['moreref']))
{
	
	$r=mysql_query("select * from all_model where type='Refrigerator';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as Refrigerator";
	}
}
if(isset($_POST['moreair']))
{
	
	$r=mysql_query("select * from all_model where type='Air Conditioner';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as Air-Condition";
	}
}
if(isset($_POST['moredvd']))
{
	
	$r=mysql_query("select * from all_model where type='DVD Player';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as DVD Player";
	}
}
if(isset($_POST['morelaptop']))
{
	
	$r=mysql_query("select * from all_model where type='Laptop';",$link);
	
	$a=mysql_num_rows($r);
	//echo  "<tr><td> Number of Model :-".$a."</td></tr>";
	if($a>0)
	{ 
  	$b=$a/5;
	//echo "<tr><td> Divide ans :- ".$b."</td></tr>";

	for($i=0; $i<$b; $i++)
	{
		echo "<table align='center'><tr>";
		for($j=0; $j<6; $j++)
		{
			$row=mysql_fetch_array($r);
		  		if($row[0]=="")
					break;
     			echo "<td><table>";
	 			echo "<tr><tr><td>&nbsp;<a href=All.php?model=".$row[0]."><img src=".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'><a href= All.php? model=".$row[7].">".$row[7]."</a><br>".$row[9]."<br></td></tr>";
     			echo "</table></td>";
		}
		echo "</tr></table>";
 	}
	}
	else
	{
		echo "There is no such item name as Laptop";
	}
}
?>
