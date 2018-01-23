<?
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);



$servername="localhost";

$dbuser="root";
$dbpassword="";

$dbname='electronics';





connecttodb($servername,$dbname,$dbuser,$dbpassword);
function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
global $link;
$link=mysql_connect ("$servername","$dbuser","$dbpassword");
if(!$link){die("Could not connect to MySQL");}
mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());
}
?>