<?php session_start();
if(!isset($_SESSION['userid']))
{
	header("location:loginck.php");
	exit();
}
 ?>
 <html>
<head>
<title>Welcome Admin</title>
<link href="../style1.css" rel="stylesheet" type="text/css">
</head>

<? 
if(isset($_SESSION['id']))
{
echo "<center><br><font face='tahoma' color='white'><h6><b>Welcome $_SESSION[userid] Click </b></font><a href=logout.php>here to logout</a></cemter>";
echo mysql_error();




	echo "<table align='center'>";
	echo "<tr>";
		echo "<td><a href='Addprod.php'><img src='image/Addprod.gif'></a></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><a href='select_delete.php'><img src='image/Deleteprod.gif'></a></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><a href='Trackorder.php'><img src='image/Trackorder.gif'></a></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><a href='Userdet.php'><img src='image/Userdet.gif'></a></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><a href='AddComp.php'><img src='image/AddComp.jpg'></a></td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td><a href='AddCate.php'><img src='image/AddCate.jpg'></a></td>";
	echo "</tr>";
	echo "</table>";
}
?>
</html>
