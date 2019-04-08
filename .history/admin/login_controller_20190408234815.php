<?php
session_start();
if($_POST["username"]=="alhayat" && $_POST["password"]=="123456"){
    $_SESSION['logged_in']='logged_in';
    header('Location: index.php');
}else{
    header('Location: login.php');
}
?>