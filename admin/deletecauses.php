<?php
include_once('dbconnect.php');
 echo $id = $_GET['dId'];
 $query = "delete from causes  WHERE Id='$id'";
mysql_query($query);
header('Location: causeslist.php?del=succsess');
?>