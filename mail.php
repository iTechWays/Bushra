<?php
require_once('mailer/class.phpmailer.php');
function smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail = true) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true; 
	$mail->IsHTML();
	if ($is_gmail) {
		//$mail->SMTPSecure = 'ssl'; 
		$mail->Host = 'mail.dattaconsultinggroup.com';
		$mail->Port = 587;  
		$mail->Username = 'contact@dattaconsultinggroup.com';  
		$mail->Password = 'akD4dcg%'; 
	} else {
		$mail->Host = SMTPSERVER;
		$mail->Username = SMTPUSER;  
		$mail->Password = SMTPPWD;
	}        
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	//echo $to;
	//echo $mail->Send();
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
 		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}
?>