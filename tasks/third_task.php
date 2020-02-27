<?php
//Здесь происходит вывод количества последовательных пар одинаковых элементов из массива состоящего из 100 элементов

//Создаётся функция в которой происходит поиск и подсчёт количества последовательных пар
function seacrh_of_repeat_number($array)
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

//Создаётся массив в котором будут хранится числа
$array = [];

//Заполнение массива $array рандомными числами с помощью функций array_push и rand
for ($i = 0; $i < 100; $i++) {
    array_push($array, rand(1, 10));
}

$count_of_all_double_number = seacrh_of_repeat_number($array);
