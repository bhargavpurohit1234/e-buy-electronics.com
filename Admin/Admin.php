<?

include "include/session.php";

include "include/z_db.php";

?>
<html>
<head><title>Admin</title>
<?php 
/*<script language="JavaScript">
	function check()
	{
			if(login.uid.value=="")
			{
				alert("Please enter User ID");
				login.uid.focus();
				return false;
			}
			if(login.password.value=="")
			{
				alert("Please enter Password");
				login.password.focus();
				return false;
			}
			if(login.uid.value!="Parag")
			{
				alert("Invalid User ID");
				login.uid.focus();
				return false;
			}
			if(login.password.value!="Parag")
			{
				alert("Invalid Password");
				login.password.focus();
				return false;
			}
			
	}
	</script>
*/?>
<link href="../style1.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<map name="tv" id="tv">
<area alt="admin" shape="rect" coords="752,80,866,156" href="../Login/Login.php">
</map>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img  border="0" usemap="#tv" src="../images/index_08_1.jpg" width="1000" height="219" alt=""></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="p2" bgcolor="#5E0404"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="71%">

<form name="login" action='loginck.php' method="POST" onSubmit="return check();"><pre>
<fieldset style="margin-left:30%; margin-right:30%;"><legend><font size="3" color="#0000FF">Login</font></legend>
   <TABLE cellSpacing=1 cellPadding=1 align=center border=0>
    <TBODY>
    <TR> 
		<td>&nbsp;User Name</td><td>&nbsp;:&nbsp;</td>
		<td align='center'><input type ='text' class='bginput' name='uid' ></td>
	</tr>
	<tr> 
		<td> &nbsp;Password</td><td>&nbsp;:&nbsp;</td>
		<td align='center'><input type ='password' class='bginput' name='password' ></td>
	</tr>
	<tr>
		<td align='center'>&nbsp;</td>
	</tr>
	<tr align="center">
		<td></td> 
		<td align="left"><input type='submit' value='Submit'></td>
		<td align="left"> <input type='reset' value='Reset'></td>
	</tr>
</table></center></fieldset></form>

<table align="center">
<tr>
	<td><font face="monospace" size="3" color="#FF0000"><b>Copyright © 2009 E-Buy Electronics Private  Limited. All rights reserved.</td>
</tr>
</table>

</center>
</body>
</html>
