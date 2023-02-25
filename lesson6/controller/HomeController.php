<?php

require_once 'fixture.php';

$pageHeader = 'Добро пожаловать';
$user = null;
if (isset($_GET['action']) && $_GET['action'] === 'task') {
    header('Location: /?controller=task');
    exit;
} else {
    $user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;
}

$username = isset($user) ? $user->getUserName() : null;
if (isset($username)) {
    setcookie('username', $username, time() + 60 * 60 * 24);
} elseif (is_null($user)) {
    $username = "Гость";
}
require_once 'view/home.php';
