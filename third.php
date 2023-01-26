<?php
function count_num_finger( $n )
{
    $r = $n % 8;
    if ($r == 0)
        return 1;
    if ($r <= 5)
        return $r-1;
    else
        return 10 - $r;
}    
$fingers = array("thumb", "index", "middle", "ring", "little");
$num_fingers = trim(readline("Enter valid number...\n"));
    while (!is_numeric($num_fingers) || $num_fingers <= 0) {
        echo "Invalid input. Please enter a positive number.\n";
        $num_fingers = trim(readline("Enter valid number...\n"));
    }
echo $fingers[count_num_finger($num_fingers)];
 
?>