<? include($_SERVER['DOCUMENT_ROOT'].'/templates/includes/third_task.php'); ?>
<? include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>
<div class="container mt-5 mb-5 pt-3 pb-3">
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
    <h3>Код:</h3>
    <pre>function seacrh_of_repeat_number($array)
{
    $count_array = count($array);
    $count_double_number = 0;
    for ($i = 0; $i < $count_array; $i++) {
        if ($array[$i] === $array[$i + 1]) {
            $count_double_number++;
        }
    }

    return $count_double_number;
}

$array = [];

for ($i = 0; $i < 100; $i++) {
    array_push($array, rand(1, 10));
}

$count_of_all_double_number = seacrh_of_repeat_number($array);</pre>
</div>
<? include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>
