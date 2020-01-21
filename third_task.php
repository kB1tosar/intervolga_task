<?php
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

$array = [];

for ($i = 0; $i < 100; $i++) {
    array_push($array, rand(1, 10));
}

$count_of_all_double_number = seacrh_of_repeat_number($array);

foreach ($array as $value) {
    echo $value . ", ";
}
echo('<br>');
echo $count_of_all_double_number;