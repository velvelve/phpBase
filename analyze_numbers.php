<?php
function analyze_numbers(array $numbers): array {
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;
    $sum = 0;
    foreach ($numbers as $number) {
        $min = min($min, $number);
        $max = max($max, $number);
        $sum += $number;
    }
    $avg = $sum / count($numbers);
    return ['min' => $min, 'max' => $max, 'avg' => $avg];
}
var_dump(analyze_numbers([1,4,3,1,3,4,5,57,7,8,88]));