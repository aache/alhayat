<?php 
include 'connection.php';
$contact_name = $_POST['contact_name'];
$contact_no = $_POST['contact_no'];

$sql = "INSERT INTO contacts (contact_name , contact_no, group) VALUES (''".$contact_name."','".$contact_no."', 'general')";
if ($con->query($sql) === TRUE) {
 
}
?>