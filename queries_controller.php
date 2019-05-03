<?php 
include 'admin/connection.php';
$name = $_GET['name'];
$email = $_GET['email'];
$question = $_GET['question'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: admin@al-hayat.co.in";
$sql = "INSERT INTO queries (uname , email , question) VALUES ('".$name."','".$email."','".$question."')";

if (mysqli_query($con, $sql)) {
    echo $sql;
}
$to_email_address = 'hamduleaaqib@gmail.com,damasif4@gmail.com' ;
$content = 'Name : '.$name .'<br/> Email : '.$email . '<br/> Question :' . $question ;  
//mail($to_email_address,'Queries',$content , $headers);

?>
