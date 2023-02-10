<?php
$numbers = array(4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2);

$result = array_map(function($num){
  return ($num % 2 == 0) ? "четное" : "нечетное";
}, $numbers);

print_r($result);