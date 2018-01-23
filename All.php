<?php session_start(); ?>
<html>
<title>View Product</title>
<body>
<?php include("MENU.php");?>
<?php
include("connect.php");

$name=$_GET['model'];

$r=mysql_query("select * from all_model where image='$name';",$link); 
$name=ltrim($name,"All/");
$name=rtrim($name,".jpg");
$row=mysql_fetch_array($r);

echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=".$row[0]." width='110' height='110'>Name : $name<br><br>"; 
	
  
  echo "<table border=1 align=center width=69% cellspacing=0 cellpadding=4 style='border:#000000 dashed thin' border='1'><b>";
  
  echo "<tr><td style='border-bottom:#000000 dashed thin' border='1'><b>Model</td><td style='border-bottom:#000000 dashed thin'>$name</td></tr>";
  //echo "<tr><td><b>Image</td><td>".$row[0]."</td></tr>";
  echo "<tr><td style='border-bottom:#000000 dashed thin' valign=top><b>Price</td><td style='border-bottom:#000000 dashed thin'>$row[1]</td></tr>";
  echo "<tr><td style='border-bottom:#000000 dashed thin'><b>Offer Price</td><td style='border-bottom:#000000 dashed thin'>$row[2]</td></tr>";
  echo "<tr><td style='border-bottom:#000000 dashed thin'><b>You Save</td><td style='border-bottom:#000000 dashed thin'>$row[3]</td></tr>";
  echo "<tr><td style='border-bottom:#000000 dashed thin'><b>Warranty</td><td style='border-bottom:#000000 dashed thin'>$row[4]</td></tr>";
  echo "<tr><td style='border-bottom:#000000 dashed thin'><b>EMI</td><td style='border-bottom:#000000 dashed thin'>$row[5]</td></tr>";
  echo "<tr><td style='border-bottom:#000000 dashed thin'><b>Shipping Day</td><td style='border-bottom:#000000 dashed thin'>$row[6]</td></tr>";
  echo "<tr><td style='border-bottom:#000000 dashed thin'><b>Company</td><td style='border-bottom:#000000 dashed thin'>$row[7]</td></tr>";
  if($row[10]!="")
  {
  echo "<tr><td style='border-bottom:#000000 dashed thin'><b>Description</td><td style='border-bottom:#000000 dashed thin'>$row[10]</td></tr>";
  }
  echo "<tr align=center><td colspan=2><a href='order.php?model=$name'><b>Order Now!</a></td></tr></table>";
?>
<br>

</body>
</html>