<?php 
$filesArray = array();
if ($handle = opendir('gallery')) {
while (false !== ($entry = readdir($handle))) {
    if ($entry != "." && $entry != "..") {
        array_push($filesArray , $entry);
    }
}
closedir($handle);
}
echo json_encode($filesArray);
?>