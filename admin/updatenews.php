<?php
include_once('dbconnect.php');
include_once('php_image_magician.php');
    $newsId=$_POST['newsId'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$tempFile = $_FILES['image']['tmp_name'];
	$fileName1 = $_FILES['image']['name'];
	$dir = "images/news/origional/";
	$rand = rand(999, 10000);
	$uniqfilename = $rand.$fileName1;
	$finalFileName = $dir.$uniqfilename;
	if(file_exists($finalFileName)) unlink($finalFileName);
   if(move_uploaded_file($tempFile,$finalFileName))
   {
		
		$dir1 = "images/news/775/";
		$dir2 = "images/news/500/";
		$dir3 = "images/news/250/";
		$dir4 = "images/news/100/";
		$dir5 = "images/news/80/";
		$dir6 = "images/news/50/";
		$dir7 = "images/news/35/";
		$magicianObj = new imageLib($finalFileName);
		$magicianObj->resizeImage(775, 775, 'crop');
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
		    
		    $sql = mysql_query("update news set title='".$title."',description='".$description."',pic='".$uniqfilename."',udate=now() where Id='".$newsId."'") or die(mysql_error());
		        if($sql){
		            header("location:news.php?update=Succsess");
		        }

	}else{
	    
			$sql = mysql_query("update news set title='".$title."',description='".$description."',udate=now() where Id='".$newsId."'") or die(mysql_error());
		        if($sql){
		            header("location:news.php?update=Succsess");
		        }
	}

?>
