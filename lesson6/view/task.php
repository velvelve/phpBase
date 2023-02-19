<html>

<head>
    <meta charset="UTF-8">
    <title>Список задач</title>
</head>

<body>
    <h1>Список задач</h1>
    <ul>
        <?php foreach ($tasks as $index => $task) : ?>
            <li>
                <?= $task->getDescription() ?><?php if ($task->getIsDone()) : ?>
                <p>Задача выполнена</p>
            <?php else : ?>
                <a href="/?controller=task&action=execute&index=<?= $index ?>">Пометить как выполненную</a>
            <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <form method="post" action="/?controller=task&action=add">
        <label for="description">Добавить задачу: </label>
        <input type="text" id="description" name="description">
        <input type="submit" value="Добавить">
    </form>
    <a href="/?action=logout">Выйти</a>

</body>

</html>