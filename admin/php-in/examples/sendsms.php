<?php
require('../textlocal.class.php');

$textlocal = new Textlocal('aaqibhamdule@yahoo.com', 'Baba1610!');

$numbers = array(919082467823);
$sender = 'AL HAYAT HOSPITAL';
$message = 'Thank You For Wisiting AL HAYAT Multi-Speciality hospital';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>