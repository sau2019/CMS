<?php
require('../phpmailer/class.phpmailer.php');
$mail = new PHPMailer();
$subject = "Test Mail using PHP mailer";
$content = "<b>This is a test mail using PHP mailer class.</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 540;  
$mail->Username = "cms@codepanda.in";
$mail->Password = "codepandacms";
$mail->Host     = "imap.one.com";
$mail->Mailer   = "imap";
$mail->SetFrom("cms@codepanda.in", "Codepanda");
$mail->AddReplyTo("cms@codepanda.in", "Codepanda");
$mail->AddAddress("recipient address");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
?>