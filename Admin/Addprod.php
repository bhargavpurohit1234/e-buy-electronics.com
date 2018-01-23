<?php session_start();
if(!isset($_SESSION['userid']))
{
	header("location:loginck.php");
	exit();
}
?>
<html>
<head>
<title>Add Product</title>
<link href="../style1.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
	function check()
	{
		if(Add.model.value=="")
		{
			alert("Please Enter Model");
			Add.model.focus();
			return false;
		}
		if(Add.name.value=="")
		{
			alert("Please Enter Name");
			Add.name.focus();
			return false;
		}
		if(Add.image.value=="")
		{
			alert("Please select Image Location");
			Add.image.focus();
			return false;
		}
		if(Add.price.value=="")
		{
			alert("Please Enter Price");
			Add.price.focus();
			return false;
		}
		if(Add.offer_price.value=="")
		{
			alert("Please Enter Offer Price");
			Add.offer_price.focus();
			return false;
		}
		if(Add.save.value=="")
		{
			alert("Please Enter Save Rupees");
			Add.save.focus();
			return false;
		}
		if(Add.warranty.value=="")
		{
			alert("Please Enter Warranty");
			Add.warranty.focus();
			return false;
		}
		if(Add.emi.value=="")
		{
			alert("Please Enter EMI");
			Add.emi.focus();
			return false;
		}
		if(Add.shipping_time.value=="")
		{
			alert("Please Enter Shipping Time");
			Add.shipping_time.focus();
			return false;
		}
		if(Add.Prodtype.value=="")
		{
			alert("Please Enter Product Type");
			Add.Prodtype.focus();
			return false;
		}
	}
</script>
<body>
<form name="Add" action="CheckAll.php" method="POST" onSubmit="return check();"><pre>
<fieldset style="margin-left:30%; margin-right:30%;"><legend><font size="3" color="#0000FF">Add Product</font></legend>
   <TABLE cellSpacing=1 cellPadding=1 align=center border=0>
   	<tr>
		<td>Model</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="model" id="model" size=25></td>
	</tr>
	<tr>
		<td>Name</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="name" id="name" size=25></td>
	</tr>
	<tr>
		<td>Image</td><td>&nbsp;:&nbsp;</td>
		<td><input type="file" name="image" id="image" size=25></td>
	</tr>
	<tr>
		<td>Price</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="price" size=25 id="price"></td>
	</tr>
	<tr>
		<td>Offer Price</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="offer_price" size=25 id="offer_price"></td>
	</tr>
	<tr>
		<td>You Save</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="save" size=25 id="save"></td>
	</tr>
	<tr>
		<td>Warranty</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="warranty" size=25 id="warranty"></td>
	</tr>
	<tr>
		<td>EMI</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="emi" size=25 id="emi"></td>
	</tr>
	<tr>
		<td>Shipping Time</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="shipping_time" size=25 id="shipping_time"></td>
	</tr>
	<tr>
		<td>Product Type</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="Prodtype" size=25 id="Prodtype"></td>
	</tr>
	<tr>
		<td>Description</td><td>&nbsp;:&nbsp;</td>
		<td><input type="text" name="Descrip" size=25 id="Descrip"></td>
	</tr>
	<tr align="center">
		<td></td> 
		<td align="left"><input type="submit" value=" Add " name="submitProd"></td>
		<td align="left"> <input type="reset" value="Reset"></td>
	</tr>
</table></center></fieldset></form>
<table align="center">
	<tr>
		<td><a href="AdminPerform.php"><img src="image/Back.gif"></a></td>
	</tr>
</table>
</body>
</html>