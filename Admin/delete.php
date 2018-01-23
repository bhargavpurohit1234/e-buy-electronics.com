<?php 
session_start();
if(!isset($_SESSION['userid']))
{
	header("location:loginck.php");
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
	$model=$_GET['model'];
	echo "$model";
	
		$result=mysql_query("select * from `all_model` where model='".$model."';",$link);
	 	$row=mysql_num_rows($result); 
	 	
		if($row>o)
		{
	 
		$a=mysql_query("DELETE FROM all_model WHERE model='$model'",$link);
		if($a)
		  	{  	
			  	echo "<script>
			 	alert('SUCESSFULLY DELETE MODEL.......');
			 	document.location='select_delete.php';
			 	</script>";
			}
		} 
		else
		{
			echo "<script>
		  		alert('$model is not avilable so plz enter correct MODEL');
		  		document.location='select_delete.php';
		  	</script>";
		}
	
?>