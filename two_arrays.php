<?php
    $array1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $array2 = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
    $result = array();
    for($i=0; $i<count($array1); $i++) {
        $result[] = $array1[$i] * $array2[$i];
    }
    print_r($result);
    echo PHP_EOL;
?>