
<?php

require_once 'Task.php';
require_once 'Comment.php';
require_once 'User.php';

class TaskService {
    public static function addComment(User $author, Task $task, string $text) {
        $comment = new Comment($author, $task, $text);
        $task->addComment($comment);
    }
}