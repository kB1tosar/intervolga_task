<?php
//Здесь происходит изменение размеров картинки вторым спобом

//Берётся нужный файл с картинкой
$filename = $_SERVER['DOCUMENT_ROOT'].'/static/image/picture.jpg';
$image = imagecreatefromjpeg($filename);

//С помощью функции getimagesize получаем размеры текущей картинки
$image_size = getimagesize($filename);
$width = $image_size[0];
$height = $image_size[1];

//Задаются новые размеры картинки
$new_width = 200;
$new_height = 100;

//С помощью функции imagecreatetruecolor создаётся новое изображение
//Это нужно для функции imagecopyresampled так как она в новую картинку копируюет с ресэмплированием старую
$new_image = imagecreatetruecolor($new_width, $new_height);

//С помощью функции imagecopyresampled происходит изменение размеров картинки
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


