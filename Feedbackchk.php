<?php session_start();
include("connect.php");
if(isset($_POST['Send']))
{
	$UserId=$_POST['Name'];
	$comp=$_POST['Company'];
	$telephone=$_POST['telephone'];
	$add=$_POST['Address'];
	$city=$_POST['City'];
	$post=$_POST['PostalCode'];
	$country=$_POST['Country'];
	$email=$_POST['Email'];
	$comments=$_POST['Comments'];
	
	
	$result=mysql_query("select * from `user_detail` where userid='".$UserId."';",$link);
	$row=mysql_num_rows($result); 
	if($row>o)
	{
	 
	$a=mysql_query("INSERT INTO `feedback` VALUES('$UserId','$comp','$telephone','$add','$city','$post','$country','$email','$comments');",$link);
	if($a)
		  {
			  echo "<script>
			 alert('SUCESSFULLY SEND FEEDBACK.......');
			 document.location='Feedback.php';
			 </script>";
		}
	} 
	else
	{
		echo "<script>
		  alert('user name is not avilable so plz enter correct USER NAME');
		  document.location='Feedback.php';
		  </script>";
	}
}
?>

	
