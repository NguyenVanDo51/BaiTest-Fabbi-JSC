<?php
function findSecondLargest($arr)
{
    if (!is_array($arr)) {
        return 0;
    }

    $max = 0;
    $maxSecond = 0;
    foreach ($arr as $element) {
        if ((integer)$element === false || !is_numeric($element) || is_double($element / 1)) {
            return 0;
        } else if ( $element > $max) {
            $maxSecond = $max;
            $max = $element;
        } else if ( $element > $maxSecond) {
            $maxSecond = $element;
        }
    }
    return (integer)$maxSecond;
}

$arr = [3, 1, 2];

$arr = str_replace('[', '', $arr);
$arr = str_replace(']', '', $arr);
$arr = explode(',', $arr);
