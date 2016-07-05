<?php 
session_start();
include_once('dbconnect.php');
$filename='';
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
           
                move_uploaded_file($_FILES["userfile"]["tmp_name"], "../../images/avatar/" . $_FILES["userfile"]["name"]);
                echo "Your file was uploaded successfully.";
        } else{
            echo "Error: There was a problem uploading your file - please try again."; 
        }
    }

} 

$description = mysql_real_escape_string($_POST['summernotes']);
$userfile = $filename;
$sdate =date('Y-m-d h:i:s');
$query = mysql_query("INSERT into aims_bojects(image,aims_bojects,cdate) VALUES ('".$userfile."','".$description."','".$sdate."')")or die(mysql_error());
if($query){
		  header("location:aims_objectives.php?insert=Succsess");
		}
?>










