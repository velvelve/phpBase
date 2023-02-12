<?php

require_once 'User.php';
require_once 'Task.php';
require_once 'TaskService.php';

$user = new User("Alex", "email@mail.com");
$task = new Task($user, "description", 1);

echo $task->getDescription().PHP_EOL;
echo $task->getDateUpdated().PHP_EOL;

$task->setDescription("new description");

echo $task->getDescription().PHP_EOL;
echo $task->getDateUpdated().PHP_EOL;

TaskService::addComment($user, $task, "comment text");

echo $task->getComments()[0]->getText();
