<?php 
include 'admin/connection.php';
$name = $_GET['name'];
$email = $_GET['email'];
$question = $_GET['question'];
$sql = "INSERT INTO queries (uname , email , question) VALUES ('".$name."','".$email."','".$question."')";

if (mysqli_query($con, $sql)) {
    echo $sql;
}
?>