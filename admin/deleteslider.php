<?php
include_once('dbconnect.php');
$sliderId = $_REQUEST['dId'];
$sql =mysql_query("delete from slider where Id='".$sliderId."'");
if($sql){
	header("location:sliders.php?del=Succsess");
}
?>