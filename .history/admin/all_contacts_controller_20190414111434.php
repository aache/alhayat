<?php 
include 'connection.php';
$numbers = array();
$result = mysqli_query($con,$sql_select_contact);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            array_push($numbers,$row['contact_no']);
        }
    }
    echo $numbers ; 
?>
