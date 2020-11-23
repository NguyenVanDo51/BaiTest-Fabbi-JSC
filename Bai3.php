<?php
$arr = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];

// output: [[0, 1], [4, 5], [13, 14], [14, 15]]

$minSize = 0;

$elements = $arr[0];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] > $arr[$j]) {
            $temp = $arr[$i] - $arr[$j];
        } else {
            $temp = $arr[$j] - $arr[$i];
        }

        if ($temp < $minSize) {
            $minSize = $temp;
        }
        $minSize = $temp;
    }
}

echo $minSize . '\n';
