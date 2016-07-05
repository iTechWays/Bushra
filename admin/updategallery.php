<?php 
include_once('dbconnect.php');
include_once('php_image_magician.php');
    $id = $_GET['id'];
   $query ="select Image from gallery where Id='$id'";
   $sql=mysql_query($query);
   $row = mysql_fetch_assoc($sql);
	
  /* $filename=$row['Image'];
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
           
                move_uploaded_file($_FILES["userfile"]["tmp_name"], "images/gallery/" . $_FILES["userfile"]["name"]);
                echo "Your file was uploaded successfully.";
        } else{
            echo "Error: There was a problem uploading your file - please try again."; 
        }
    }

}*/
 //$id = $_GET['id'];
    $update =date('Y-m-d');
    $tempFile = $_FILES['galleryimage']['tmp_name'];
    $fileName1 = $_FILES['galleryimage']['name'];
    $filesize = $_FILES["galleryimage"]["size"];
    $dir = "images/gallery/origional/";
    $rand = rand(999, 10000);
    $uniqfilename = $rand.$fileName1;
    $finalFileName = $dir.$uniqfilename;
    if(file_exists($finalFileName)) unlink($finalFileName);
    $maxsize = 0.1 * 750 * 750;
//if(is_uploaded_file($_FILES['galleryimage']['tmp_name'])){
  if($filesize > $maxsize){
   if(move_uploaded_file($tempFile,$finalFileName))
   {
        
        $dir1 = "images/gallery/775/";
        $dir2 = "images/gallery/500/";
        $dir3 = "images/gallery/250/";
        $dir4 = "images/gallery/100/";
        $dir5 = "images/gallery/80/";
        $dir6 = "images/gallery/50/";
        $dir7 = "images/gallery/35/";
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

        // mysqli query to insert the updated data
        $query = "UPDATE gallery SET Image='$uniqfilename',udate='$update' WHERE Id='$id'";
        mysql_query($query);
        header('Location: gallery.php?update=success');
    }
//}
}else{
   header("location:editgallery.php?eId=$id&update=failue");
}
?>