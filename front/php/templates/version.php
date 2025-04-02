<?php


$filename = "/app/.VERSION";

if(file_exists($filename)) {
    $fileContents = file_get_contents($filename);
    if(trim($fileContents) === 'Dev') {
        echo date('H:i:s') . " - " . $fileContents;
    } else {
        echo $fileContents;
    }
}
else {
    echo date('H:i:s') . " - N/A";
}          
 
?>
