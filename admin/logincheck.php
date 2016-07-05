<?php
session_start();
$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
    die("Database connection failed: " . mysql_error());
}
// 2. Select a database to use 
$db_select = mysql_select_db('bushra',$conn);
if (!$db_select) {
    die("Database selection failed: " . mysql_error());
}
  $email = mysql_real_escape_string(trim($_POST['email']));
	$password = mysql_real_escape_string(trim($_POST['password']));
	$res=mysql_query("SELECT * FROM users WHERE email='$email' and password='$password'");
  if(mysql_num_rows($res)>=1){
    $res123 =mysql_query("SELECT * FROM users WHERE email='$email' and password='$password' and status=1");
    if(mysql_num_rows($res123)>0){
      $row=mysql_fetch_array($res);
    $_SESSION['user_id'] = $row['Id'];
    echo "true";
    }else{
    	 echo "false";
    }
   
  }
  else{
   echo "Incorrect";
  }
	
	
?>