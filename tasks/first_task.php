<?php
$filename = __DIR__ . '/picture.jpg';
$image = imagecreatefromjpeg($filename);

$new_width = 200;
$new_height = 100;

$new_image = imagescale($image, $new_width, $new_height);
imagejpeg($new_image, null, 100);