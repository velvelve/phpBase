<?php
$wishes = array("happiness", "health", "prosperity", "love", "success");

$epithets = array("infinite", "strong", "incredible", "cosmic", "endless");

$name = trim(readline("What is your name?\n"));

$random_wishes = array_rand($wishes, 3);
$selected_wishes = array();
for($i=0; $i<3; $i++) {
    $selected_wishes[] = $epithets[$i] . " " . $wishes[$random_wishes[$i]];
}

$greeting = "Dear $name, from the bottom of my heart I congratulate you on your birthday, I wish you " . implode(", ", $selected_wishes) . "!";

echo "$greeting".PHP_EOL;
?>