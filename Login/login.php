<?

include "include/session.php";

include "include/z_db.php";

?>



<html>
<head>
<script language="JavaScript">
	function color(obj)
	{
		obj.Style.BackgroundColor="red";
	}
	function color1(obj)
	{
		obj.Style.BackgroundColor="cyan";
	}
	function check()
	{
		if (login.uid.value=="")
		{
			alert("Enter user ID!");
			login.uid.focus();
			return false;
		}
		if (login.password.value=="")
		{
			alert("Enter your password!");
			login.password.focus();
			return false;
		}
	}
	</script>

<title>Login</title>


</head>

<body>
<?php include("MENU.php");?>



<form name="login" action='loginck.php' method="POST" onSubmit="return check();"><pre>
<fieldset style="margin-left:30%; margin-right:30%;"><legend><font size="3" color="#0000FF">Login</font></legend>
   <TABLE cellSpacing=1 cellPadding=1 align=center border=0>
    <TBODY>
    <TR> 
		<td>&nbsp;User Name</td><td>&nbsp;:&nbsp;</td>
		<td align='center'><input type ='text' class='bginput' name='uid' onFocus="color(this)" onBlur="color1(this)"></td>
	</tr>
	<tr> 
		<td> &nbsp;Password</td><td>&nbsp;:&nbsp;</td>
		<td align='center'><input type ='password' class='bginput' name='password' onFocus="color(this)" onBlur="color1(this)"></td>
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
		<td> <a href="../Register1.php">New Member Sign UP</a></font></td> 
	</tr>
	
</table>	

<?
//require "bottom.php";
?>

</body>

</html>
