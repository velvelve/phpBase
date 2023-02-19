<?php

require_once 'model/UserProvider.php';
require_once 'model/User.php';

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    setcookie('username', '', time() - 3600);
    header("Location: index.php");
    die();
}
$error = null;
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $user = UserProvider::getByUserNameAndPassword($username, $password);
    if (is_null($user)) {
        $error = 'Пользователь не существует';
    } else {
        unset($_SESSION['user']);
        $_SESSION['user'] = serialize($user);
        header('Location: /');
    }
}

require_once 'view/signin.php';
