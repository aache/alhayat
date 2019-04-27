<?php 
include 'admin/connection.php';
$name = $_GET['name'];
$email = $_GET['email'];
$question = $_GET['question'];
$sql = "INSERT INTO queries (uname , email , question) VALUES ('".$name."','".$email."','".$question."')";

if (mysqli_query($con, $sql)) {
    echo $sql;
}


require 'phpmailer/phpmailer.php' ;
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$subject = "Test Mail using PHP mailer";
$content = "<b>This is a test mail using PHP mailer class.</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "nuamca786@gmail.com ";
$mail->Password = "password";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("naufilmomincs@gmail.com", "Naufil");
$mail->AddReplyTo("nuamca786@gmail.com ", "PHPPot");
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
