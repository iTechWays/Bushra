<?php
include_once('dbconnect.php');
include_once('php_image_magician.php');
    $userId=$_POST['userId'];
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
if(is_uploaded_file($_FILES['image']['tmp_name'])){
   if(file_exists($finalFileName)) unlink($finalFileName);
   if(move_uploaded_file($tempFile,$finalFileName))
   {

		$dir1 = "images/users/100/";
		$dir2 = "images/users/35/";
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(100, 100, 'crop');
		$magicianObj1->saveImage($dir1.$uniqfilename, 100);
		$magicianObj1->resizeImage(35, 35, 'crop');
		$magicianObj1->saveImage($dir2.$uniqfilename, 100);	
		unlink($finalFileName);
		 //echo "true";

		$qur = mysql_query("SELECT * FROM users WHERE email='".$email."' and Id != '".$userId."'");
		if(mysql_num_rows($qur)>0){
			echo "erroremail";
			header("location:adduser.php?email=error");
		}
		else{

			$sql = mysql_query("update users set fname='".$fname."',lname='".$lname."',email='".$email."',password='".$password."',pic='".$uniqfilename."',utype='".$type."',cId='".$countryId."',udate=now() where Id='".$userId."'") or die(mysql_error());
		        if($sql){
		            header("location:users.php?insert=Succsess");
		        }
	    }
	}

}else{
	    $qur = mysql_query("SELECT * FROM users WHERE email='".$email."' and Id != '".$userId."'");
		if(mysql_num_rows($qur)>0){
			echo "erroremail";
			header("location:edit.php?email=error");
		}
		else{
			$sql = mysql_query("update users set fname='".$fname."',lname='".$lname."',email='".$email."',password='".$password."',utype='".$type."',cId='".$countryId."',udate=now() where Id='".$userId."'") or die(mysql_error());
		        if($sql){
		             header('location:users.php?update=succsess');
		        }
	    }
	}

?>
