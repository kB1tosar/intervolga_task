<title>Третье задание</title>
<? include('tasks/third_task.php'); ?>
<? include('header.php'); ?>
<div class="container indents">
    <h1>Третье задание </h1>
    <h2>Массивы</h2>
    <p>Дан массив из 100 элементов. Требуется вывести количество
        последовательных пар одинаковых элементов<br>
        Например:<br>
        1, 1, 2, 3, 4, -51, 12, 12, 12, -51<br>
        Для примера ответ "3"<br>
        пришлите ссылку на репозиторий с решением<br></p><hr>
    <h3>Массив:</h3>
    <p><? foreach ($array as $value) echo $value . ", "; ?> </p>
    <h3>Ответ:</h3>
    <p><? echo $count_of_all_double_number; ?></p>
</div>
<? include('footer.php'); ?>
