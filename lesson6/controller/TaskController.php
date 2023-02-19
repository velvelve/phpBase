<?php

require_once 'model/TaskProvider.php';

if (!isset($_SESSION['user'])) {
    header('Location: /?controller=security');
    exit();
}

if (isset($_GET['action']) && $_GET['action'] === 'execute') {
    $index = $_GET['index'];
    TaskProvider::markAsDone($index);
}

$user = unserialize($_SESSION['user']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['description']) && !empty(trim($_POST['description']))) {
        $description = trim($_POST['description']);
        TaskProvider::addTask($description);
    }
}

$tasks = TaskProvider::getUndoneList();

require_once 'view/task.php';
