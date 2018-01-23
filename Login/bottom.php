<?
if(isset($_SESSION['id']))
{
$tm=date("Y-m-d H:i:s");
$q=mysql_query("update user_detail set status='ON',tm='$tm' where userid='$_SESSION[id]'");
echo "<center><br>Welcome $_SESSION[userid] Click <a href=logout.php>here to logout</a> &nbsp; | &nbsp; <a href=change-password.php>Change Password</a>&nbsp;
&nbsp; <br></center>";/*<a href=update-profile.php>Update Profile</a>*/
echo mysql_error();}
else
{
echo "<center><a href=login.php>Already a member, please Login</a> </center>";

}

while($nt=mysql_fetch_array($qt))
{
echo "$nt[userid],";
}
?>