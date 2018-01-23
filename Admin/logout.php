<?

include "include/session.php";
include "include/z_db.php"; 

session_unset();
session_destroy();

?>


<html>

<head>
<title>Logout</title>
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

echo "<center><font face='Verdana' size='2' color='white'>Successfully logged out. <br><br> </font></center>";

if(isset($_SESSION['id']))
{
echo "<center><br>Welcome $_SESSION[userid] Click <a href=logout.php>here to logout</a> </center>";
echo mysql_error();}
else
{
echo "<center><a href=Admin.php>Please Login</a> </center>";

}

?>

</body>
</html>
