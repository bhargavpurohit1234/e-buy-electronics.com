<?php 
session_start();
if(!isset($_SESSION['userid']))
{
	header("location:Trackorder.php");
	exit();
}
include("include/z_db.php");
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

<body leftmargin="200" rightmargin="200" background="../image/Newbgimg1.jpg"><br></body></html>
<?
	$odate=$_GET['odate'];
	$ddate=$_GET['ddate'];
		
		$result=mysql_query("select * from `order_detail` where Order_Date='$odate' AND Delivery_Date='$ddate';",$link);
	 	$row=mysql_num_rows($result); 
	 	
		if($row==1)
		{
	 
		$a=mysql_query("DELETE FROM Order_Detail WHERE Order_Date='$odate' AND Delivery_Date='$ddate'",$link);
		if($a)
		  	{  	
			  	echo "<script>
			 	alert('SUCESSFULLY DELETE ORDER DETAIL.......');
			 	document.location='Trackorder.php';
			 	</script>";
			}
		} 
?>