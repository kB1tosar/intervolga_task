<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <? include($_SERVER['DOCUMENT_ROOT'].'/templates/includes/front.php');
   include_once($_SERVER['DOCUMENT_ROOT'].'/templates/includes/title_from_json.php');
   ?>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/index.php">Задание для стажёра</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/first_task_page/index.php">Первое задание <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/second_task_page/index.php">Второе задание <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/third_task_page/index.php">Третье задание</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://volgograd.hh.ru/resume/f00166caff044bc7be0039ed1f414668363034">Ссылка на hh</a>
                </li>
            </ul>
        </div>
    </div>
</header>
