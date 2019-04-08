<?php
   session_start();
   if($_SESSION['logged_in']!='logged_in'){
        header('Location: login.html');
   }
?>