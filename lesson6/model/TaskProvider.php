<?php
require_once 'Task.php';

class TaskProvider
{
    public static function getUndoneList()
    {
        $tasks = isset($_SESSION['tasks']) ? unserialize($_SESSION['tasks']) : array();
        $undoneTasks = array();
        foreach ($tasks as $task) {
            $undoneTasks[] = $task;
        }

        return $undoneTasks;
    }

    public static function addTask($description)
    {
        $tasks = isset($_SESSION['tasks']) ? unserialize($_SESSION['tasks']) : array();
        $tasks[] = new Task(false, $description);
        $_SESSION['tasks'] = serialize($tasks);
    }

    public static function markAsDone(int $index)
    {
        $tasks = isset($_SESSION['tasks']) ? unserialize($_SESSION['tasks']) : array();
        $tasks[$index]->setIsDone(true);
        $_SESSION['tasks'] = serialize($tasks);
    }
}
