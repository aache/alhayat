<?php
$con = new mysqli("localhost","root","","alhayat");
//$con = mysqli_connect("localhost","aaqib","baba1610!","al_hayat");
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

  $sql_select_contact = "select contact_name , contact_no from contact";
  $result = $con->query($sql_select_contact);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["contact_no"]. " - Name: ".  $row["contact_name"]. "<br>";
    }
?>