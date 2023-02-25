<?php

require_once 'model/TaskProvider.php';
require_once 'model/User.php';
$pdo = require 'db.php';
$taskProvider = new TaskProvider($pdo);

if (!isset($_SESSION['user'])) {
    header('Location: /?controller=security');
    exit();
}

$user = unserialize($_SESSION['user']);

if (isset($_GET['action']) && $_GET['action'] === 'execute') {
    $taskProvider->markAsDone($user->getUserId());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['description']) && !empty(trim($_POST['description']))) {
        $description = trim($_POST['description']);
        $taskProvider->addTask($user->getUserId(), $description);
    }
}

$tasks = $taskProvider->getUndoneListFromDb($user->getUserId());

require_once 'view/task.php';
