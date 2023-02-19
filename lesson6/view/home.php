<?php

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>
    <p>Привет, <?= $username ?></p>
    <?php if (isset($user)) : ?>
        <a href="/?action=task">Задачи</a>
        <a href="/?action=logout">Выйти</a>
    <?php else : ?>
        <a href="/?controller=security">Войти</a>
    <?php endif ?>
</body>

</html>