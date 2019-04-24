<?php
include 'connection.php';
    $title = $_GET['title'];
    $content = $_GET['content'];
    $footer = $_GET['footer'];
    
    $sql = "update popup set title = '" . $title . "' , content = '" . $content . "' , footer = '" .$footer. "' " ; 
    if (mysqli_query($con, $sql)) {
        echo "SUCCESS";
    }else  {
        echo "Error updating popup";
    }
?>