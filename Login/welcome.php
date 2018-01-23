<?

include "include/session.php";

include "include/z_db.php";

?>


<html>
<head>
<title>Welcome</title>
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
<center>Your Order Detail</center>		
<table border="2" bordercolor="#FFCC33" width="100%">
	<tr>
	
	  <th width="30"> <h3> <b> User Name </b></h3></th> 
	  <th width="30"> <h3> <b> EMI </b></h3></th> 
	  <th width="20"> <h3> <b> Quantity</b></h3></th> 
	  <th width="20"> <h3> <b> Model </b></h3></th> 
	  <th width="20"> <h3> <b> Price </b></h3></th> 
	  <th width="50"> <h3> <b> Type </b></h3></th> 
	  <th width="15"> <h3> <b> Company </b></h3></th> 
	  <th width="150"> <h3> <b> Warranty </b></h3></th> 
	  <th width="15"> <h3> <b> Shipping Time </b></h3></th> 
	  <th width="15"> <h3> <b> Order Date </b></h3></th> 
	  <th width="30"> <h3> <b> Delivery Date </b></h3></th> 
	  <th width="30"> <h3> <b> Total Price </b></h3></th> 
	</tr>

<?
$select=mysql_query("select * from order_detail where userid='$_SESSION[userid]'",$link); 
	
	
		
	while($row=mysql_fetch_array($select))
	{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>".$row[7]."</td>";
		echo "<td>".$row[8]."</td>";
		echo "<td>".$row[9]."</td>";
		echo "<td>".$row[10]."</td>";
		echo "<td>".$row[11]."</td>";
		echo "</tr>";
	}
	echo "</table>";


require "bottom.php";
?>

</body>

</html>
