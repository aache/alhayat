<?php
$con = new mysqli("localhost","root","","alhayat");
//$con = mysqli_connect("localhost","aaqib","baba1610!","al_hayat");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql_select_contact = "select contact_name , contact_no from contact";
?>