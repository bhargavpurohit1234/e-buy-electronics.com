<?

include "include/session.php";
include "include/z_db.php";


$uid=$_POST['uid'];
$password=$_POST['password'];
?>


<html>

<head>
<title>Error</title>
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

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?
$userid=mysql_real_escape_string($uid);
$password=mysql_real_escape_string($password);

if($rec=mysql_fetch_array(mysql_query("SELECT * FROM user_detail WHERE userid='$userid' AND V_Password = '$password'")))
{
	if(($rec['userid']==$userid)&&($rec['V_Password']==$password))
	{
		include "include/newsession.php";
		
     	print "<script>";
       	print " self.location='welcome.php?uid=$userid';"; // Comment this line if you don't want to redirect
        print "</script>";

	} 
}	
else 
{
	session_unset();
	echo "<font face='Verdana' size='2' color=red>Wrong Login. Use your correct  Userid and Password and Try <br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
		
}
?>
</body>
</html>
