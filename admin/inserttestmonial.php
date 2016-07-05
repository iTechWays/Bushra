<?php
include_once('dbconnect.php');

	$username = $_POST['username'];
	$description = $_POST['description'];
 
	$sql=mysql_query("INSERT INTO testimonials(username,description,cdate)
	VALUES ('".$username."','".$description."',now())") or die(mysql_error());
        if($sql){
            header("location:testimonials.php?insert=Succsess");
        }

?>
