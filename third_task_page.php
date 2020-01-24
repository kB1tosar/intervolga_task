<? include('tasks/third_task.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <? include('front.php'); ?>
</head>
<body>
<? include('header.php'); ?>
<div class="indents_body">
    <h1>Задание третье</h1>
    <h2>Массивы</h2>
    <p>Дан массив из 100 элементов. Требуется вывести количество
        последовательных пар одинаковых элементов<br>
        Например:<br>
        1, 1, 2, 3, 4, -51, 12, 12, 12, -51<br>
        Для примера ответ "3"<br>
        пришлите ссылку на репозиторий с решением<br></p>
    <p>Массив:<br><? foreach ($array as $value) echo $value . ", "; ?> </p>
    <p>Ответ:<br><? echo $count_of_all_double_number; ?></p>
</div>
<? include('footer.php'); ?>
</body>
</html>