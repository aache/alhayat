<?php
session_start();
//echo $_POST["username"];
//echo $_POST["password"];
if($_POST["username"]=="dr@alhayat" && $_POST["password"]=="123456"){
    $_SESSION['logged_in']='logged_in';
    header('Location: index.php');
}else{
    header('Location: login.html');
}
?>