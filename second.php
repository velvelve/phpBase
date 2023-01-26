<?php
    $name = trim(readline("What is your name?\n"));
    $num_tasks = trim(readline("How many tasks do you have scheduled for today?\n"));
    while (!is_numeric($num_tasks) || $num_tasks <= 0) {
        echo "Invalid input. Please enter a positive number.\n";
        $num_tasks = trim(readline("How many tasks do you have scheduled for today?\n"));
    }
    $tasks = array();
    $total_time = 0;
    for ($i = 1; $i <= $num_tasks; $i++) {
        $task = trim(readline("What is task $i?\n"));
        $time = trim(readline("How much time do you need for this task?\n"));
        while (!is_numeric($time) || $time <= 0) {
            echo "Invalid input. Please enter a positive number.\n";
            $time = trim(readline("How much time do you need for this task?\n"));
        }
        $tasks[] = array("name" => $task, "time" => $time);
        $total_time += $time;
    }
    echo "$name, today you have $num_tasks tasks planned for today:\n";
    foreach ($tasks as $task) {
        echo "- " . $task['name'] . " (" . $task['time'] . ")\n";
    }
    echo "Estimated time to complete the plan = $total_time \n";
?>