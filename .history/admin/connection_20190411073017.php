<?php
$con = mysqli_connect("localhost","root","","alhayat");
//$con = mysqli_connect("localhost","aaqib","baba1610!","al_hayat");
// Check connection
if (mysqli_connect_errno())
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql_select_contact = "select contact_name , contact_no from contact";
?>