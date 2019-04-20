<?php 
include 'connection.php';
$link = $_GET['link'];
$sql = "INSERT INTO videos (link) VALUES ('".$link."')";

if (mysqli_query($con, $sql)) {
    echo $sql;
}
?>