<?php
include_once('dbconnect.php');
include_once('php_image_magician.php');

	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$type=$_POST['type'];
	$countryId=$_POST['countryId'];
	$tempFile = $_FILES['image']['tmp_name'];
	$fileName1 = $_FILES['image']['name'];
	$dir = "images/users/origional/";
	$rand = rand(999, 10000);
	$uniqfilename = $rand.$fileName1;
	$finalFileName = $dir.$uniqfilename;
	//if(file_exists($finalFileName)) unlink($finalFileName);
   if(move_uploaded_file($tempFile,$finalFileName))
   {
		
		$dir1 = "images/users/775/";
		$dir2 = "images/users/100/";
		$dir3 = "images/users/35/";
		$magicianObj = new imageLib($finalFileName);
		$magicianObj->resizeImage(775, 775, 'crop');
		$magicianObj->saveImage($dir1.$uniqfilename, 100);
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(100, 100, 'crop');
		$magicianObj1->saveImage($dir2.$uniqfilename, 100);
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(35, 35, 'crop');
		$magicianObj1->saveImage($dir3.$uniqfilename, 100);	
		unlink($finalFileName);
		 //echo "true";
		$qur = mysql_query("SELECT * FROM users WHERE email='".$email."'");
	
		if(mysql_num_rows($qur)>0){
			echo "erroremail";
			header("location:adduser.php?email=error");
		}
		else{
			$sql=mysql_query("INSERT INTO users(fname, lname, email, password,pic,utype,cId,cdate)
			VALUES ('".$fname."','".$lname."','".$email."','".$password."','".$uniqfilename."','".$type."','".$countryId."',now())") or die(mysql_error());
		        if($sql){
		            header("location:users.php?insert=Succsess");
		        }
	    }

} else {
	     
	    $qur = mysql_query("SELECT * FROM users WHERE email='".$email."'");
	
		if(mysql_num_rows($qur)>0){
			header("location:adduser.php?email=error");
		} else {
			$sql=mysql_query("INSERT INTO users(fname, lname, email,password,utype,cId,cdate)
			VALUES ('".$fname."','".$lname."','".$email."','".$password."','".$type."','".$countryId."',now())") or die(mysql_error());
	        if($sql){
	            header("location:users.php?insert=Succsess");
	        }
	    }
}
?>
