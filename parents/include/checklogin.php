<?php
/** @noinspection HttpUrlsUsage */
function check_login()
{
if(strlen($_SESSION['dlogin'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="direct.php";
		$_SESSION["dlogin"]="";
		header("location: http://$host$uri/$extra");
	}
}
