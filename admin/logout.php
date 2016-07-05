<?php
include_once('dbconnect.php');
if(isset($_SESSION['user_id']))
{
	//unset($_SESSION['user_id']);
	session_destroy();
	header("Location: login.php");
}
else 
{
	header("Location: login.php");
}


?>