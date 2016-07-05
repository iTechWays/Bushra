<?php 
include_once('dbconnect.php');
include_once('php_image_magician.php');
    $id = $_GET['id'];
   $query ="select image from causes where Id='$id'";
   $sql=mysql_query($query);
   $row = mysql_fetch_assoc($sql);

	 /* $arr ='';
   //$userfile='';
   $filename=$row['image'];
   if(isset($_FILES["userfile"]["error"])){
    if($_FILES["userfile"]["error"] > 0){
        echo "Error: " . $_FILES["userfile"]["error"] . "<br>";
    } else{
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["userfile"]["name"];
        $filetype = $_FILES["userfile"]["type"];
        $filesize = $_FILES["userfile"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
           
                move_uploaded_file($_FILES["userfile"]["tmp_name"], "images/causes/" . $_FILES["userfile"]["name"]);
                echo "Your file was uploaded successfully.";
        } else{
            echo "Error: There was a problem uploading your file - please try again."; 
        }
    }

}*/


$title =$_REQUEST['title'];
$desc =$_REQUEST['desc'];
$update =date('Y-m-d');

    $tempFile = $_FILES['casuesimage']['tmp_name'];
    $fileName1 = $_FILES['casuesimage']['name'];
    $filesize = $_FILES["casuesimage"]["size"];
    $dir = "images/causes/origional/";
    $rand = rand(999, 10000);
    $uniqfilename = $rand.$fileName1;
    $finalFileName = $dir.$uniqfilename;
    if(file_exists($finalFileName)) unlink($finalFileName);
    $maxsize = 0.1 * 750 * 750;
    if(is_uploaded_file($_FILES['casuesimage']['tmp_name'])){
   if($filesize > $maxsize){
   if(move_uploaded_file($tempFile,$finalFileName))
   {
        
        $dir1 = "images/causes/775/";
        $dir2 = "images/causes/500/";
        $dir3 = "images/causes/250/";
        $dir4 = "images/causes/100/";
        $dir5 = "images/causes/80/";
        $dir6 = "images/causes/50/";
        $dir7 = "images/causes/35/";
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

$qur = mysql_query("SELECT * FROM causes WHERE title='".$title."' and Id !=$id");
		if(mysql_num_rows($qur)>0){
			
			 flash( 'errormsg', 'Title Already Exist' );
			header("location:editcauses.php?eId=$id");
		} else {
$query = "UPDATE causes SET title='$title',description='$desc',image='$uniqfilename',udate='$update' WHERE Id='$id'";
mysql_query($query);
header('Location: causes.php?update=success');
		}
}
}else{
    header("location: editcauses.php?eId=$id&error=file");
}
}else{
 $query = "UPDATE causes SET title='$title',description='$desc',udate='$update' WHERE Id='$id'";
mysql_query($query);
header('Location: causes.php?update=success');   
}

?>