<?php

include_once('dbconnect.php');
	$email= isset($_GET['email']) ? mysql_real_escape_string($_GET['email']) : "";
	$qur = mysql_query("SELECT * FROM `user` WHERE `email`='".$email."'");
	
		if(mysql_num_rows($qur)>0)
		{
			$sql=mysql_query("UPDATE `user` SET `status`='1' WHERE email='".$email."'") or die(mysql_error());
			header('Location: http://localhost/datta/index.php?active=active');
			 

		}
		else{
		
			header('Location:http://localhost/datta/index.php?error');
		}

    

?>
