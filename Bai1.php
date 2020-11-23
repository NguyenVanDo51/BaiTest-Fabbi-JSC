<?php
$arr = [11, 2, 8, 10, 5, 99, 1, 8, 9];

// => output: [11, 10, 1, 2, 9, 2, 8, 9, 3]
$arr = array_chunk($arr, 3);
$output = [];
$index = 0;
foreach ($arr as $items) {
    $output[$index] = $items[0];
    $index++;
}
foreach ($arr as $items) {
    $output[$index] = $items[1];
    $index++;
}
foreach ($arr as $items) {
    $output[$index] = $items[2];
    $index++;
}

foreach ($output as $item) {
    echo $item . ' ';
}

echo '\n';
