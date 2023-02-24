<?php
include "model/User.php";
include "model/UserProvider.php";

$pdo = new PDO('sqlite:database.db');

$query = 'CREATE TABLE IF NOT EXISTS users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
    )';

$taskQuery = 'CREATE TABLE IF NOT EXISTS tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    userid INTEGER NOT NULL,
    description VARCHAR(150),
    isdone TINYINT NOT NULL
    )';

$pdo->exec($query);
$pdo->exec($taskQuery);

$admin = new User('admin');
$admin->setName('Ember Song');

$userProvider = new UserProvider($pdo);
$userProvider->registrUser($admin, '123');
