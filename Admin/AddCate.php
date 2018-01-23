<?php session_start();
if(!isset($_SESSION['userid']))
{
	header("location:loginck.php");
	exit();
}
?>


<html>
<head>
<title>Add Category</title>
<link href="../style1.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function check()
	{
		if(AddCate.name.value=="")
		{
			alert("Please Enter Category Name");
			AddCate.name.focus();
			return false;
		}
	}
	function check1()
	{
		if(DeleteCate.name.value=="")
		{
			alert("Please Enter Category Name");
			DeleteCate.name.focus();
			return false;
		}
	}
</script>
</head>
<body>

<? //..................................Add Category....................?>
<form name="AddCate" action='CheckAll.php' method="GET" onSubmit="return check();"><pre>
<fieldset style="margin-left:30%; margin-right:30%;"><legend><font size="3" color="#0000FF">Add Company</font></legend>
   <TABLE cellSpacing=1 cellPadding=1 align=center border=0>
   	<tr>
		<td>Category Name</td><td>&nbsp; :&nbsp;</td>
		<td><input type="text" name="name" id="name" size=25></td>
	</tr>
	<tr align="center">
		<td></td> 
		<td align="left"><input name="submitCate" type='submit' value=' Add '></td>
		<td align="left"><input type='reset' value='Reset'></td>
	</tr>
   </TABLE>
</fieldset>
</pre>
</form>


<? //...............................Delete Category................................. ?>
<form name="DeleteCate" action='CheckAll.php' method="GET" onSubmit="return check1();"><pre>
<fieldset style="margin-left:30%; margin-right:30%;"><legend><font size="3" color="#0000FF">Delete Category</font></legend>
   <TABLE cellSpacing=1 cellPadding=1 align=center border=0>
   	<tr>
		<td>Category Name</td><td>&nbsp; :&nbsp;</td>
		<td><input type="text" name="name" id="name" size=25></td>
	</tr>
	<tr align="center">
		<td></td> 
		<td align="left"><input name="submitCateDelete" type='submit' value=' Delete '></td>
		<td align="left"><input type='reset' value='Reset'></td>
	</tr>
   </TABLE>
</fieldset>
</pre>
</form>

<table align="center">
	<tr>
		<td><a href="AdminPerform.php"><img src="image/Back.gif"></a></td>
	</tr>
</table>


<? //....................................List Company..............................?>

<table border="2" bordercolor="#FFCC33" align="center">
<tr>
	<th width="30"> <h3> <b> Available Category </b></h3></th> 
</tr>


<?
	include ("include/z_db.php");
	$r=mysql_query("select * from category",$link); 
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
			
  
			echo "<tr><td>$row[0]</td></tr>";
		}
		echo "</tr>";
	}
?>

</body>
</html>
