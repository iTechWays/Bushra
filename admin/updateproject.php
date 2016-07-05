<?php 
include_once('dbconnect.php');
include_once('php_image_magician.php');
    $id = $_GET['eId'];
    $pname = mysql_real_escape_string($_REQUEST['pname']);
    $description = mysql_real_escape_string($_REQUEST['desc']);
    $shortdesc = mysql_real_escape_string($_REQUEST['shortdesc']);
    $tempFile = $_FILES['projectimage']['tmp_name'];
    $fileName1 = $_FILES['projectimage']['name'];

    //$filesize = $_FILES["projectimage"]["size"];
    $dir = "images/projects/origional/";
    $rand = rand(999, 10000);
    $uniqfilename = $rand.$fileName1;
    $finalFileName = $dir.$uniqfilename;
    //if(file_exists($finalFileName)) unlink($finalFileName);
    //$maxsize = 0.2 * 1024 * 1024;
   //if($filesize > $maxsize){
   if(move_uploaded_file($tempFile,$finalFileName))
   {
        
        
        $dir1 = "images/projects/100/";
        $dir2 = "images/projects/500/";
        
        $magicianObj1 = new imageLib($finalFileName);
        $magicianObj1->resizeImage(100, 100, 'crop');
        $magicianObj1->saveImage($dir1.$uniqfilename, 100);
        
        $magicianObj2 = new imageLib($finalFileName);
        $magicianObj2->resizeImage(500, 500, 'crop');
        $magicianObj2->saveImage($dir2.$uniqfilename, 100);

        unlink($finalFileName);
  // mysqli query to insert the updated data

  $query = mysql_query("UPDATE projects SET pname='".$pname."',shortdescription='".$shortdesc."',description='".$description."',image='".$uniqfilename."',cdate=now() WHERE Id=$id")
 or die(mysql_error());

                if($query){
                    header("location:projects.php?update=Succsess");
                }

//}
}else{
   //$query = mysql_query("UPDATE projects SET pname='$pname',description='$description',goalamount='$gamnt',cdate=now() WHERE Id='$id'");
   $sql = mysql_query("UPDATE projects SET pname='".$pname."',shortdescription='".$shortdesc."',description='".$description."',cdate=now() WHERE Id='".$id."'") or die(mysql_error());
                if($sql){
                    header('Location: projects.php?update=Succsess123');
                }
}
?>