<?php 
include 'connection.php';
$contact_name = $_POST['contact_name'];
$contact_no = $_POST['contact_no'];

$sql = "INSERT INTO contacts (contact_name , contact_no, contact_grp) VALUES ('".$contact_name."','".$contact_no."', 'test')";

if (mysqli_query($con, $sql)) {
    echo $sql;
}
?>