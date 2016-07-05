<?php
include_once('dbconnect.php');
$newsId = $_REQUEST['dId'];
$sql =mysql_query("delete from news where Id='".$newsId."'");
if($sql){
	header("location:news.php?del=Succsess");
}
?>