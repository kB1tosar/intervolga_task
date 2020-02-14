<?php
$filename = __DIR__ . '/picture.jpg';
$image = imagecreatefromjpeg($filename);

$image_size = getimagesize($filename);
$width = $image_size[0];
$height = $image_size[1];
$new_width = 200;
$new_height = 100;

$new_image = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled(
    $new_image,
    $image,
    0,
    0,
    0,
    0,
    $new_width,
    $new_height,
    $width,
    $height
);

imagejpeg($new_image, null, 100);

$new_image = imagescale($image, $new_width, $new_height);
imagejpeg($new_image, null, 100);