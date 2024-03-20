<?php
session_start();
$correctUsername="admin";
$correctPassword="admin";

if (!isset($_SESSION['login_attempts']))
{
	$_SESSION['login_attempts']=0;
}
if($_SERVER['REQUEST_METHOD']==='POST')
{
	$_SESSION['login_attempts']++;
	$enteredUsername = $_POST['username'];
	$eneteredPassword=$_POST['password'];
	if ($enteredUsername===$correctUsername && $enteredPassword===$correctpassword);
	{
		unset($_SESSION['login_attemps'];
		header("Location
	}
}
