<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php 
	include("connect.php");
	
if(isset($_POST['Submit']))
{	
	$UserId=$_POST['logonId'];
	$pass=$_POST['logonPassword'];
	$Vpass=$_POST['logonPasswordVerify'];
	$first=$_POST['firstName'];
	$last=$_POST['lastName'];
	$middle=$_POST['middleName'];
	$email=$_POST['Email'];
	$phone=$_POST['phone'];
	$add=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$pin=$_POST['zipCode'];
	//$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$edu=$_POST['education'];
	$occ=$_POST['occupation'];
	$st='on';
	$time=date("Y-m-d g:i:s");
	
	$UserId=mysql_real_escape_string($UserId);
	$pass=mysql_real_escape_string($pass);
	$Vpass=mysql_real_escape_string($Vpass);
	$first=mysql_real_escape_string($first);
	$last=mysql_real_escape_string($last);
	$middle=mysql_real_escape_string($middle);
	$email=mysql_real_escape_string($email);
	$phone=mysql_real_escape_string($phone);
	$add=mysql_real_escape_string($add);
	$city=mysql_real_escape_string($city);
	$state=mysql_real_escape_string($state);
	$country=mysql_real_escape_string($country);
	$pin=mysql_real_escape_string($pin);
	//$dob=mysql_real_escape_string('dob');
	$gender=mysql_real_escape_string($gender);
	$edu=mysql_real_escape_string($edu);
	$occ=mysql_real_escape_string($occ);
	
	$result=mysql_query("select * from `user_detail` where userid='".$UserId."';",$link);
	 $row=mysql_num_rows($result); 
	 if($row>o)
	 {
		echo "<script>
		  alert('user name is already avilable so plz enter another USER NAME');
		  document.location='Register1.php';
		  </script>";
	} 
	else
	{
		
		$a=mysql_query("INSERT INTO `user_detail` VALUES('$UserId','$pass','$Vpass','$first','$middle','$last','$email','$phone','$add','$city','$state','$country','$pin','$gender','$edu','$occ','$st','$time');",$link);

      echo "Your User Id is $UserId";
		 if($a)
		  {
			  echo "<script>
			 alert('SUCESSFULLY INSERTED USER DETAIL.......');
			 document.location='Login/login.php';
			 </script>";
		}
	}
}
?>

</body>
</html>
