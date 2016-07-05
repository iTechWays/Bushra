<?php
include_once('dbconnect.php');
$testmonialId = $_REQUEST['dId'];
$sql =mysql_query("delete from testimonials where Id='".$testmonialId."'");
if($sql){
	header("location:testimonials.php?del=Succsess");
}
?>