<?php
include_once('dbconnect.php');
include_once('php_image_magician.php');

	$title= mysql_real_escape_string($_POST['title']);
	$subtitle= mysql_real_escape_string($_POST['subtitle']);
	$description= mysql_real_escape_string($_POST['description']);
	$tempFile = $_FILES['image']['tmp_name'];
	$fileName1 = $_FILES['image']['name'];
	$dir = "images/slider/origional/";
	$rand = rand(999, 10000);
	$uniqfilename = $rand.$fileName1;
	$finalFileName = $dir.$uniqfilename;
	if(file_exists($finalFileName)) unlink($finalFileName);
   if(move_uploaded_file($tempFile,$finalFileName))
   {
		
		$dir1 = "images/slider/1500/";
		$dir2 = "images/slider/500/";
		$dir3 = "images/slider/250/";
		$dir4 = "images/slider/100/";
		$dir5 = "images/slider/80/";
		$dir6 = "images/slider/50/";
		$dir7 = "images/slider/35/";
		$magicianObj = new imageLib($finalFileName);
		$magicianObj->resizeImage(1500, 600, 'crop');
		$magicianObj->saveImage($dir1.$uniqfilename, 100);
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(500, 500, 'crop');
		$magicianObj1->saveImage($dir2.$uniqfilename, 100);
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(250, 250, 'crop');
		$magicianObj1->saveImage($dir3.$uniqfilename, 100);
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(100, 100, 'crop');
		$magicianObj1->saveImage($dir4.$uniqfilename, 100);
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(80, 80, 'crop');
		$magicianObj1->saveImage($dir5.$uniqfilename, 100);
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->saveImage($dir6.$uniqfilename, 100);
		$magicianObj1->resizeImage(50, 50, 'crop');
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(35, 35, 'crop');
		$magicianObj1->saveImage($dir7.$uniqfilename, 100);	
		unlink($uniqfilename);

			$sql=mysql_query("INSERT INTO slider(title, subtitle, description,image,cdate)
			VALUES ('".$title."','".$subtitle."','".$description."','".$uniqfilename."',now())") or die(mysql_error());
		        if($sql){
		            echo "true";
		            header("location:sliders.php?insert=Succsess");
		        }

	}

?>
