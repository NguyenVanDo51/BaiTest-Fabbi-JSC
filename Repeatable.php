<?php

// Function that returns true if it is possible
// to rearrange the characters of the string
// such that no two consecutive characters are same
function isPossible($str)
{
    if (!is_string($str))
        return 0;
    // Mang luu tan so xuat hien cua cac ky tu
    $freq = [];

    // Luu tan so cua ky tu dc lap lai nhieu nhat
    $max_freq = 0;
    for ($j = 0; $j < strlen($str); $j++) {
        // Neu khong phai chu cai dang thuong thi return 0
        if (ord($str[$j]) < 97 || ord($str[$j] > 122)) {
            return 0;
        }
        $freq[$str[$j]] = 0;
    }

    // Duyet qua toan bo cac ky tu
    for ($j = 0; $j < strlen($str); $j++) {
        // Tang so lan lap lai cua ky tu
        $freq[$str[$j]]++;
        if ($freq[$str[$j]] > $max_freq)
            $max_freq = $freq[$str[$j]];
    }

    // Neu tan so cua ky tu duoc lap lai nhieu nhat ma lon hon phan con lai + 1 thi tuc la khong the sap xep lai
    if ($max_freq <= (strlen($str) - $max_freq + 1))
        return 1;
    return 0;
}

$str = "asasasass";

echo isPossible($str);
