<?php
session_start();

/*if(!isset($_SESSION['valid']))
{
	header("location:login.php");
	exit();
}*/
$name=$_GET['model'];
//$prize=$_POST['pri'];   


?>
<html>
<title>Order</title>
<head>
<script type="text/javascript">
	function check()
	{
		if(order.uid.value=="")
		{
			alert("Please Enter User Name");
			order.uid.focus();
			return false;
		}
		if(order.password.value=="")
		{
			alert("Please Enter Password");
			order.password.focus();
			return false;
		}
	}
</script>
</head>
<body>
<?php include("MENU.php");
//echo "$name";
?>

<pre>
<form name="order" action="orderchk.php" method="POST" onSubmit="return check();">
<fieldset style="margin-left:20%; margin-right:20%;"><legend><font size="3" color="#0000FF">Order</font></legend>
<table border="0" align="center">
   		 
        <TABLE cellSpacing=1 cellPadding=1 align=center border=0>
          <TBODY>
             <TR> 
                <TD>Username</TD>  <td>&nbsp;:&nbsp;</td>
                <TD><input maxlength=20 size=25 name=uid id="uid"></TD>
            </TR> 
			<TR> 	
               <TD>Password</TD> <td> &nbsp;:&nbsp;</td>
               <TD><INPUT type=password maxLength=20 size=25 name=password id="password"> (Minimum 6 characters.)</TD>
            </TR>
			<? //<tr>
				//<td>Credit Card No.</td><td>&nbsp;:&nbsp;</td>
				//<td><input type=password size=25 name=creditcardno id="creditcardno"></td>
			//</tr> ?>
			<tr>
				<td>Quantity</td><td>&nbsp;:&nbsp;</td>
				<td><select name="quantity"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>
			</tr>
			<tr>
				<td><input type="hidden" name="model" value="<? echo $_GET['model']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type=Submit name=submit id=submit value="ORDER"></td>
				<td><input type=Reset name=reset id=reset value="RESET"></td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			</TBODY>
			</TABLE>
</table></fieldset>
</form>

<center> No Account? <br> <a href="Register1.php">Click here to Register</a></center>
<br>


</body>
</html>