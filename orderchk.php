<?

include "Login/include/session.php";
include "Login/include/z_db.php";

$uid=$_POST['uid'];
$password=$_POST['password'];
$name=$_POST['model'];
$quantity=$_POST['quantity'];

?>
<html>

<head>
<title>Error</title>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/index_08_1.jpg" width="1000" height="219" alt=""></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="p2" bgcolor="#5E0404"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="71%">

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?
//echo "$quantity";

$userid=mysql_real_escape_string($uid);
$password=mysql_real_escape_string($password);
$name=mysql_real_escape_string($name);

if($rec=mysql_fetch_array(mysql_query("SELECT * FROM user_detail WHERE userid='$uid' AND V_Password = '$password'")))
{
	/*if(($rec['userid']==$userid)&&($rec['V_Password']==$password))
	{
		include "include/newsession.php";
		
		
     	print "<script>";
       	print " self.location='welcome.php';"; // Comment this line if you don't want to redirect
        print "</script>";

	} 
	echo "$name<br>";
	echo "$quantity<br>";*/
	$order_date=date("Y-m-d g:i:s");
	$delivery_date=time()+(6*24*60*60);
	$delivery_date=date('Y-m-d g:i:s',$delivery_date);
	
	

	$select=mysql_query("select Offer_Price,Warranty,EMI,Shipping_Time,name,type from all_model where model='$name';",$link); 
	
	echo "<table border=1>";
		
	while($row=mysql_fetch_array($select))
	{
		$offprice=$row["Offer_Price"];
		$a=ltrim($offprice,"Rs. ");
		$b=$quantity;
		$t=$a * $b;
		$war=$row['Warranty'];
		$emi=$row['EMI'];
		$shitime=$row['Shipping_Time'];
		$namecomp=$row['name'];
		$type=$row['type'];
	
	
		//echo "$t";
		/*echo "<tr>";
		echo "<td>'$offprice'</td>";
		echo "<td>'$war'</td>";
		echo "<td>'$emi'</td>";
		echo "<td>'$shitime'</td>";
		echo "<td>'$namecomp'</td>";
		echo "<td>'$type'</td>";
		$t=$b * $a;
		echo $t;
		echo "</tr>";*/
	}
	echo "</table>";
	
	
	$insert="insert into order_detail(userid,EMI,Quantity,model,price,type,company,warranty,shipping_time,Order_Date,Delivery_Date,total_price) values('$uid','$emi','$quantity','$name','$offprice','$type','$namecomp','$war','$shitime','$order_date','$delivery_date','Rs. ".$t."')";
	
	$result=mysql_query($insert);
	if($result)
	{ 
		echo "<script>
			 alert('SUCESSFULLY ORDER PRODUCT.......');
			 document.location='NEW_HOME.php';
			 </script>";
	}
	else
	{ 
		echo "Incorrent Query<br>"; 
	  	echo $insert;
	}
}	
else 
{
	session_unset();
	//echo "$name";
	echo "<font face='Verdana' size='2' color=red>Wrong Userid and Password<br> Please Enter Correct UserID and Password<br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
		
}
?>
</body>
</html>
