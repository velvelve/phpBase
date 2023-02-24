<?php
require_once 'Task.php';

class TaskProvider
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUndoneListFromDb($userId)
    {
        $statement = $this->pdo->prepare("SELECT * FROM tasks WHERE userid = :userid AND isdone = 0");
        $statement->execute([':userid' => $userId]);
        $tasks = [];
        while ($row = $statement->fetchObject()) {
            $task = new Task(false, $row->description);
            $task->setId($row->id);
            $task->setUserId($row->userid);
            $tasks[] = $task;
        }

        return $tasks;
    }

    public static function getUndoneList()
    {
        $tasks = isset($_SESSION['tasks']) ? unserialize($_SESSION['tasks']) : array();
        $undoneTasks = array();
        foreach ($tasks as $task) {
            $undoneTasks[] = $task;
        }

        return $undoneTasks;
    }

    public function addTask(int $userId, string $description)
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (userid, description, isdone) VALUES (:userid, :description, :isdone)'
        );

        return $statement->execute([
            'userid' => $userId,
            'description' => $description,
            'isdone' => 0
        ]);
    }

    public function markAsDone(int $userid)
    {
        $statement = $this->pdo->prepare('UPDATE tasks SET isdone = 1 WHERE userid = :userid');
        $mark = $statement->execute([
            'userid' => $userid
        ]);
        return $mark;
    }
}
