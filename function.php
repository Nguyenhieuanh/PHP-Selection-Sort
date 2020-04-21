<?php
function selectionSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $arr = swapPosition($arr, $i, $min);
    }
    return $arr;
}

function swapPosition($arr, $left, $right)
{
    $oldValue = $arr[$right];
    $arr[$right] = $arr[$left];
    $arr[$left] = $oldValue;
    return $arr;
}

function show($arr)
{
    foreach ($arr as $value) {
        echo "$value, ";
    }
}