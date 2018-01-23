<?php
	include ("connect.php");
?>
<html>
<head>
<script type="text/javascript">
	function validateFeedback(f1)
{	
	var re_mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z])+$/;
	if (!f1.Name.value.length) 
	{
	   alert("You Must Enter Your Name");
	   f1.Name.focus();
	   return false;
	}
	if(f1.telephone.value=='') 
	{
			alert("Please enter phone number.");
			f1.telephone.focus();
	        return false;
	}
	var re2 = /^[0-9 _-]+$/;
	if (!re2.test(f1.telephone.value)) 
	{
	   alert("Phone no. can be numeric or - only");
	   f1.telephone.focus();
	   return false;
	}	
	if(f1.Address.value=='') 
	{
		alert("Please enter your address.");
		f1.Address.focus();
		return false;
	}	
	if(f1.City.value=='') 
	{
		alert("Please enter your city.");
		f1.City.focus();
		return false;
	}
	if(f1.PostalCode.value=='') 
	{
		alert("Please enter your postalcode.");
		f1.PostalCode.focus();
		return false;
	}
	if(f1.Country.value=='') 
	{
		alert("Please enter your country.");
		f1.Country.focus();
		return false;
	}
	if (!f1.Email.value.length) 
	{
	   alert("You Must Enter Your Email-id");
	   f1.Email.focus();
	   return false;
	}
	if (!re_mail.test(f1.Email.value))	
	{
			alert( "Enter Your Email-id correctly" );
			f1.Email.focus();
			return false;
	}
	
}
</script>

<title>Feedback</title>
</head>
<body>
<?php include("MENU.php");?>
<?php
	if(isset($_GET['flag']))
	{
		if($_GET['flag']==1)
		{
			echo "Invalid User Name!";
		}
	}
?>

<? /*<table align="center">
	<tr align="center">
		<td><font face="monospace" size="+2" color="#0000FF"><b>Send Your Feedback</b></font></td>
	</tr>
</table> */?>
<br><br>
<pre>
<form action="Feedbackchk.php" method="post" name="form1" id="form1" onSubmit="return validateFeedback(this);">
<fieldset style="margin-left:20%; margin-right:20%;"><legend><font size="3" color="#0000FF">Send Your FeedBack</font></legend>
<table cellSpacing=1 cellPadding=1 align=center border=0>
		<tbody align="left">
                <tr>
					<td>User Name</td><td>&nbsp;:&nbsp;</td>
			        <td><input name="Name" type="text" class="input" id="Name" size="30" value="" /></td>
                </tr>
                <tr>
                     <td>Company</td><td>&nbsp;:&nbsp;</td>
                     <td><input name="Company" type="text" class="input" id="Company" size="30" value="" /></td>
                </tr>
                <tr>
                    <td>Phone No. </td><td>&nbsp;:&nbsp;</td>
                    <td><input name="telephone" type="text" class="input" id="phoneNo" size="30" value="" /></td>
                </tr>
				<tr>
                    <td>Address</td><td>&nbsp;:&nbsp;</td>
                    <td><input name="Address" type="text" class="input" id="Address" size="30" value="" /></td>
                </tr>
                <tr>
                    <td>City or Town</td><td>&nbsp;:&nbsp;</td>
					<td><input name="City" type="text" class="input" id="City" size="30" value="" /></td>
                 </tr>
                 <tr>
                    <td>Post Code</td><td>&nbsp;:&nbsp;</td>
			        <td><input name="PostalCode" type="text" class="input" id="PostalCode" size="10" value="" /></td>
                 </tr>
                 <tr>
                     <td>Country</td><td>&nbsp;:&nbsp;</td>
                     <td><input name="Country" type="text" class="input" id="Country" value="" /></td>
                 </tr>
				 <? /*<tr>
                     <td>Fax</td><td>&nbsp;:&nbsp;</td>
                     <td><input name="Fax" type="text" class="input" id="Fax" value="" /></td>
                 </tr>*/ ?>
                 <tr>
                     <td>Email</td><td>&nbsp;:&nbsp;</td>
			         <td><input name="Email" type="text" class="input" id="Email" size="40" value="" />
                 </tr>
                 <tr>
                     <td valign="top">Your Comments </td><td align="justify">&nbsp;:&nbsp;</td>
			         <td><textarea name="Comments" cols="40" rows="5" wrap="VIRTUAL" class="input" id="Comments"></textarea></td>
				</tr>
        		<tr>
					<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
                    <td align="left"><input name="Reset" type="reset" id="Reset" value="Reset" />
                 	<input name="Send" type="submit" id="Send" value="Send Your Feedback" /></td>
                </tr>
			</tbody>
		
	</table></fieldset></form>
<br><br>
<table align="center">
<tr>
	<td><font face="monospace" size="3" color="#FF0000"><b>Copyright © 2009 E-Buy Electronics Private  Limited. All rights reserved.</td>
</tr>
</table>
</body>
</html>

