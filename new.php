<?

?>
<html>
<body>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("new",$link);


$r=mysql_query("select Company from Company",$link); 

echo "<tr align='left'><td><br><img src='image/Company.gif'></td></tr>
	<tr><td><select name=comp>";

while($row=mysql_fetch_array($r,MYSQL_NUM))
{
					printf("<option>$row[0]</option>");
					
}
	echo "</select></td></tr>
	<tr align='right'><td><input type='submit' name='searchcomp' value=' Go '></td></tr>
	<tr>";
?>
</body>
</html>
