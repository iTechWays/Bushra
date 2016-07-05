<?php
include_once('dbconnect.php');
$id = $_GET['dId'];
$query = mysql_query("delete from projects  WHERE Id='$id'");
if($query){
header("Location:projects.php?del=Succsess");
}
?>