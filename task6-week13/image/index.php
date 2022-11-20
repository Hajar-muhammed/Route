<?php
require_once 'image.php';

$image = new Image();
echo  $image->validate()->rename()->upload();