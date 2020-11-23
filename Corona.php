<?php

$t =  [["Hue","covid"],["Dat","Hue"],["Lam","Hue"],["Trinh","Dat"]];
$output = [["Hue", "covid", 0, [["Dat", "Hue", 1, [["Trinh", "Dat", 2, []]]], ["Lam", "Hue", 1, []]]]];
$output = [["Hue", "covid", 0, [["Dat", "Hue", 0, [["Trinh", "Dat", 0, []]]], ["Lam", "Hue", 0, []]]]];

function report($input)
{
    $sort = [];
    foreach ($input as $k0 => $f0) {
        $input[$k0][2] = 0;
        $input[$k0][3] = [];
        $temp = [];
        $temp["index"] = 0;
        $temp["value"] = $input[$k0];

        foreach ($input as $k1 => $f1) {
            if ($f0[0] === $f1[1]) {
                $temp["index"] += 1;
            }
        }
        array_push($sort, $temp);
    }

    usort($sort, function ($a, $b) {
        return $a["index"] - $b["index"];
    });

    $sort = array_values($sort);
    $input = [];
    foreach ($sort as $value) {
        array_push($input, $value["value"]);
    }

    $arr = $input;
    foreach ($arr as $k0 => $f0) { // Duyet toan bo danh sach, tim nguoi da tiep xuc
        foreach ($arr as $k1 => $f1) {      // Duyet toan bo danh sach
            if ($f0[1] === $f1[0]) {        // Neu thang f1 la parent cua f0
                $input[$k0][2] = $input[$k1][2] + 1;
                array_push($input[$k1][3], $input[$k0]);  // thi day thang f0 vao ds cua f1
            }
        }
    }

    return [array_pop($input)];
}

$input = '[["Hue","covid"],["Dat","Hue"],["Lam","Hue"],["Trinh","Dat"]]';
// convert input to array
$input = str_replace('[[', '', $input);
$input = str_replace(']]', '', $input);
$input = str_replace('"', '', $input);
$input = explode('],[', $input);

foreach ($input as $key => $value) {
    $input[$key] = explode(',', $value);
}

$input = report($input);
var_dump(json_encode($input));
