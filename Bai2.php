<?php
$arr = [0, 100, -4, 8, 143, 5, 99, 100];

// Output: 243

$max = 0;
$elements = $arr[0];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        $temp = $arr[$i] + $arr[$j];
        if ($temp > $max) {
            $max = $temp;
        }
    }
}

echo "Output: " . $max;
