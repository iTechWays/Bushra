<?php
include_once('dbconnect.php');
$userId = $_REQUEST['dId'];
$sql =mysql_query("delete from users where Id='".$userId."'");
if($sql){
	header("location:users.php?del=Succsess");
}
?>