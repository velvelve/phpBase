<?php
    $name = trim(readline("What is your name?\n"));
    $tasks = array();
    $total_time = 0;
    for ($i = 1; $i <= 3; $i++) {
        $task = trim(readline("What is your $i challenge for today?\n"));
        $time = trim(readline("How long will this task take?\n"));
        $total_time += $time;
        $tasks[] = ["task" => $task, "time" => $time];
    }
    echo "$name, today you have 3 priority tasks planned for the day:\n";
    foreach ($tasks as $task) {
        echo "- " . $task["task"] . " (" . $task["time"] . "h)\n";
    }
    echo "Estimated time to complete the plan = $total_time h\n";
?>