<?php 
include("include/z_db.php");
include("delete.html");
?>

<html>
<head>
<title>Delete</title>
<link href="../style1.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../images/index_08_1.jpg" width="1000" height="219" alt=""></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="p2" bgcolor="#5E0404"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="71%">
</head>

<body leftmargin="200" rightmargin="200" background="../image/Newbgimg1.jpg"><br>

<form name="form1" method="post" action="select_delete.php">
<table width="62%" cellspacing="0">
<tr>
<td width="13%"><img src="image/Category1.gif" width="120" height="28"></td>
    <td width="5%"><label><? echo "<select name='cate'><option></option>";
	$r=mysql_query("select Category from Category",$link);
	while($row=mysql_fetch_array($r,MYSQL_NUM))
	{
			printf("<option>$row[0]</option>");
	}	
	echo "</select></label></td>"; ?>
    <? //<td width="4%"><label><input type="submit" name="searchcate" value="GO"></label></td> ?>
    
	<td width="13%"><img src="image/Company1.gif" width="118" height="28"></td>
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
<?
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
	 			echo "<tr><tr><td>&nbsp;<img src=../".$row[0]." width='110' height='110' border='0'></a></td></tr>";
	  			echo "<tr><td align='center'>".$row[7]."<br><a href=delete.php?model=".$row[9]." onclick='return deloper()'>".$row[9]."</a><br></td></tr>";
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
?>
<table align="center">
	<tr>
		<td><a href="AdminPerform.php"><img src="image/Back.gif"></a></td>
	</tr>
</table>
</body>
</html>