<?php

require_once 'model/UserProvider.php';
require_once 'model/User.php';

$pdo = require 'db.php';

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header("Location: index.php");
    die();
}
$error = null;
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUserNameAndPassword($username, $password);
    if (is_null($user)) {
        $error = 'Пользователь не существует';
    } else {
        unset($_SESSION['user']);
        $_SESSION['user'] = serialize($user);
        header('Location: /');
        die();
    }
}

require_once 'view/signin.php';
