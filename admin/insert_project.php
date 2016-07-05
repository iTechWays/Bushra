<?php
include_once('dbconnect.php');
include_once('php_image_magician.php');

    $pname= mysql_real_escape_string($_POST['pname']);
    $shortdesc= mysql_real_escape_string($_POST['shortdesc']);
    $desc= mysql_real_escape_string($_POST['desc']);
    //$gamount= mysql_real_escape_string($_POST['gamount']);
    $tempFile = $_FILES['projectimage']['tmp_name'];
    $fileName1 = $_FILES['projectimage']['name'];
    $dir = "images/projects/origional/";
    $rand = rand(999, 10000);
    $uniqfilename = $rand.$fileName1;
    $finalFileName = $dir.$uniqfilename;
    if(file_exists($finalFileName)) unlink($finalFileName);
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

            //$sql = mysql_query("INSERT into projects (pname,description,image,goalamount,cdate) VALUES ('$pname','$desc','$uniqfilename','$gamount',now())") or die(mysql_error());

            $sql = mysql_query("INSERT into projects (pname,shortdescription,description,image,cdate) VALUES ('$pname','$shortdesc','$desc','$uniqfilename',now())") or die(mysql_error());

                if($sql){
                    echo "true";
                    header("location:projects.php?insert=Succsess");
                }

    }

?>











