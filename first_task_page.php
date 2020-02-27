<title>Первое задание</title>
<? include('header.php'); ?>
<div class="container mt-5 mb-5 pt-3 pb-3">
    <h1>Первое задание</h1>
    <h2>Мозги + PHP</h2>
    <p>На диске лежит файл image.png, размер 20000 на 20000 точек. Вывести
        картинку как баннер размером 200 на <br>
        100 пикселей.<br>
        ﻿Обратите внимание на размер и пропорции.<br>
        Пришлите ссылку на репозиторий с решением.<br></p>
    <hr>
    <h3>Ответ:</h3>
    <h4>Первый вариант решения:</h4>
    <pre>$filename = __DIR__ . '/picture.jpg';
$image = imagecreatefromjpeg($filename);

$new_width = 200;
$new_height = 100;

$new_image = imagescale($image, $new_width, $new_height);
imagejpeg($new_image, null, 100);</pre>
    <img src="tasks/first_task.php" class="img-thumbnail rounded mx-auto d-block">
    <hr>
    <h4>Второй вариант решения:</h4>
    <pre>$filename = __DIR__ . '/picture.jpg';
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
imagejpeg($new_image, null, 100);</pre>
    <img src="tasks/first_task_second.php" class="img-thumbnail rounded mx-auto d-block">
</div>
<? include('footer.php'); ?>
