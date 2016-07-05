<?php 
include_once('dbconnect.php');
 echo $id = $_GET['dId'];
 $query = "delete from gallery  WHERE Id='$id'";
mysql_query($query);
header('Location: gallerylist.php?del=succsess');
?>