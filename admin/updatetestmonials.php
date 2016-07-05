<?php
include_once('dbconnect.php');
    $testmonialId=$_POST['testmonialId'];
	$username=$_POST['username'];
	$description = $_POST['description'];
			$sql = mysql_query("update testimonials set username='".$username."',description='".$description."',udate=now() where Id='".$testmonialId."'") or die(mysql_error());
		        if($sql){
		            header("location:testimonials.php?update=Succsess");
		        }

?>
