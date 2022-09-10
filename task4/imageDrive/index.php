<?php
 $directory    = 'uploadedimages';
$images = scandir( $directory);

$length = count($images);
for ($i=0; $i<$length; $i++){
    echo "$images[$i] <br>";
}


//I can't do the part of download
?>