<?php
include_once('dbconnect.php');
include_once('mail.php');
include_once('admin/php_image_magician.php');


    $fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$countryId=$_POST['countryId'];
	$tempFile = $_FILES['image']['tmp_name'];
	$fileName1 = $_FILES['image']['name'];
	$dir = "admin/images/users/origional/";
	$rand = rand(999, 10000);
	$uniqfilename = $rand.$fileName1;
	$finalFileName = $dir.$uniqfilename;
   if(move_uploaded_file($tempFile,$finalFileName))
   {
		
		$dir1 = "admin/images/users/50/";
		$dir2 = "admin/images/users/100/";
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->saveImage($dir1.$uniqfilename, 100);
		$magicianObj1->resizeImage(50, 50, 'crop');
		$magicianObj1 = new imageLib($finalFileName);
		$magicianObj1->resizeImage(35, 35, 'crop');
		$magicianObj1->saveImage($dir2.$uniqfilename, 100);	
		unlink($finalFileName);
		 //echo "true";

		$qur = mysql_query("SELECT * FROM users WHERE email='".$email."'");
	
		if(mysql_num_rows($qur)>0){
			//echo "erroremail";
			flash( 'errormsg', 'Email is Already Exist');
			header("location:joinus.php");
		}
		else{
			$sql=mysql_query("INSERT INTO users(fname, lname, email, password,pic,utype,cId,cdate)
			VALUES ('".$fname."','".$lname."','".$email."','".$password."','".$uniqfilename."',3,'".$countryId."',now())") or die(mysql_error());
		        if($sql){
		        	$arry['status']= "true";
                    $arry['msg'] = "Valid User";
                    $to = $email;
                    $array_template = array('{{email}}','{{password}}');
                    $from = "contact@dattaconsultinggroup.com";
                    $subject = "Datta Activation Your Account";
                    $bdy = file_get_contents('templates/activation.html');
                    $array_user = array();
                    $array_user['email'] = $to;
                    $body = str_replace($array_template, $array_user, $bdy);
                   $SMTPChat = smtpmailer($to, $from, "Datta Support", $subject, $body, $is_gmail = true);
                  
		            flash( 'successmsg', 'Register Succsessfully please check your mail and Activate Your Account');
		            header("location:joinus.php?insert=Succsess");
		        }
	    }

	}else{
	     
	    $qur = mysql_query("SELECT * FROM users WHERE email='".$email."'");
	
		if(mysql_num_rows($qur)>0){
			flash( 'errormsg', 'Email is Already Exist');
			header("location:joinus.php");
		}
		else{
			$sql=mysql_query("INSERT INTO users(fname, lname, email,password,utype,cId,cdate)
			VALUES ('".$fname."','".$lname."','".$email."','".$password."',3,'".$countryId."',now())") or die(mysql_error());
		        if($sql){
		            $arry['status']= "true";
                    $arry['msg'] = "Valid User";
                    $to = $email;
                    $array_template = array('{{email}}','{{password}}');
                    $from = "contact@dattaconsultinggroup.com";
                    $subject = "Datta Activation Your Account";
                    $bdy = file_get_contents('templates/activation.html');
                    $array_user = array();
                    $array_user['email'] = $to;
                    $body = str_replace($array_template, $array_user, $bdy);
                   $SMTPChat = smtpmailer($to, $from, "Datta Support", $subject, $body, $is_gmail = true);
                  
                  flash( 'successmsg', 'Register Succsessfully please check your mail and Activate Your Account');
		            header("location:joinus.php?insert=Succsess");
		        }
	    }
	}
?>
