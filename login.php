<?php
include_once('dbconnect.php');
 $email = mysql_real_escape_string(trim($_POST['email']));
  $password = mysql_real_escape_string(trim($_POST['password']));
  $res=mysql_query("SELECT * FROM users WHERE email='".$email."' and password='".$password."'");
  if(mysql_num_rows($res)>0){
    $res123 =mysql_query("SELECT * FROM users WHERE email='$email' and password='$password' and status=1");
    if(mysql_num_rows($res123)>0){
      $row=mysql_fetch_array($res);
    $_SESSION['user_id'] = $row['Id'];
    header("Location: index.php");
    }else{
    	flash( 'errorloginmsg',"Your Account was not Activated Please check your mail to Activate");
    	 header("Location: joinus.php");
    }
   
  }else{
    flash( 'errorloginmsg',"Email or Password Wrong");
    header("Location: joinus.php");
  }
?>