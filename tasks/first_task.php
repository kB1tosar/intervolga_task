<?php
//Здесь происходит изменение размеров картинки

//Берётся нужный файл с картинкой
$filename = __DIR__ . '/picture.jpg';
$image = imagecreatefromjpeg($filename);

//Задаются новые размеры картинки
$new_width = 200;
$new_height = 100;

//С помощью функции imagescale происходит ихменение размеров картинки
$new_image = imagescale($image, $new_width, $new_height);
imagejpeg($new_image, null, 100);