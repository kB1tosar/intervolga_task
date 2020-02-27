<?php
//Здесь происходит изменение размеров картинки

//Берётся нужный файл с картинкой
$filename = $_SERVER['DOCUMENT_ROOT'].'/static/image/picture.jpg';
$image = imagecreatefromjpeg($filename);

//Задаются новые размеры картинки
$new_width = 200;
$new_height = 100;

//С помощью функции imagescale происходит изменение размеров картинки
$new_image = imagescale($image, $new_width, $new_height);
imagejpeg($new_image, null, 100);