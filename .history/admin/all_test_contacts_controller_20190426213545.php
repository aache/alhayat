<?php 
include 'connection.php';

$result = mysqli_query($con,$sql_test_select_contact);
$output = "[";
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output = $output .'"'.  $row["contact_no"] .'"'. "," ;  
        }
    }
    $output=rtrim($output,",")."]";
    echo $output; 
?>
