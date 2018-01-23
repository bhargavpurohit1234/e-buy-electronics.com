<?

include "include/session.php";
include "include/z_db.php";

?>

<html>


<head>

<script type="text/javascript">
function check()
{
	if(f1.password.value=="")
	{
		alert("Please Enter New Password");
		f1.password.focus();
		return false;
	}
	if(f1.password2.value=="")
	{
		alert("Please Enter Verification Password");
		f1.password2.focus();
		return false;
	}
	if(f1.password.value!=f1.password2.value)
	{
		alert("Both Password is not same Please Enter same password");
		f1.password.focus();
		return false;
	}
}
</script>

<title>Change Password</title>
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


<? require "check.php"; ?>

<form name="f1" action="change-passwordck.php" method="post" onSubmit="return check();">
<pre>
<fieldset style='margin-left:30%; margin-right:30%;'><legend><font size='3' color='#0000FF'>Change Password</font></legend>
<table border='0' cellspacing='1' cellpadding='1' align=center>
	<tr> 
		<td>&nbsp;New Password</td><td>&nbsp;:&nbsp;</td>
		<td><input type ='password' class='bginput' name='password' id="password"></td>
	</tr>

	<tr>
		<td>&nbsp;Verification Password</td><td>&nbsp;:&nbsp;</td>
		<td><input type ='password' class='bginput' name='password2' id="password2"></td>
	</tr>
	<tr><td></td></tr>

	<tr>
		<td align='right'><input type="submit" value='Change Password' name="change"></td>
		<td></td>
		<td><input type="reset" value='Reset'></td>
	</tr>

</table></fieldset>

<? require "bottom.php"; ?>

</body>

</html>
