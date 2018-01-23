<?

include "include/session.php";

include "include/z_db.php";
?>


<html>
<head>
<title>Success</title>
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
<?

require "check.php";

$password=$_POST['password'];
$password2=$_POST['password2'];


if(isset($_POST['change']))
{
$password=mysql_real_escape_string($password);
echo "<pre>";
	if(mysql_query("update user_detail set password='$password',V_Password='$password' where userid='$_SESSION[userid]'"))
	{
		echo "<font face='Verdana' size='2' ><center>Thanks <br> Your password changed successfully. Please keep changing your password for better security</font></center>";
	}
	else
	{
	echo "<font face='Verdana' size='2' color=red><center>Sorry <br> Failed to change password Contact Site Admin</font></center>";
	}
}
require "bottom.php";

?>
</body>
</html>
