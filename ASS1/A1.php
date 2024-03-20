<?php
session_start();
echo $_SESSION['count']++;
?>

<?php
if(!isset($_COOKIE['count']))
{
	echo"WELCOME viewed this page 1";
	$cookie=0;
	setcookie("count",$cookie);
}
else
{
	$cookie=++$_cookie['count'];
	setcookie("count",$_cookie);
	echo"times you viewed this page";
}
?>
