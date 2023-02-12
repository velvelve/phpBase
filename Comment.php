<?php

require_once 'User.php';
require_once 'Task.php';

class Comment {
    private $author;
    private $task;
    private $text;

    public function __construct(User $author, Task $task, string $text) {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }

    public function setAuthor(User $author) {
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    } 
    
    public function setTask(Task $task) {
        $this->task = $task;
    }

    public function getTask() {
        return $this->task;
    } 
    
    public function setText($text) {
        $this->text = $text;
    }

    public function getText() {
        return $this->text;
    }
}