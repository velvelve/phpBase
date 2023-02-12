<?php

require_once 'User.php';

class Task {
    private $description;
    private $dateCreated;
    private $dateUpdated;
    private $dateDone;
    private $priority;
    private $isDone;
    private $user;
    private $comments;

    public function __construct(User $user, $description, $priority) {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->dateCreated = date("d-m-Y H:i:s");
        $this->dateUpdated = date("d-m-Y H:i:s");
        $this->isDone = false;
    }

    public function addComment(Comment $comment) {
        $this->comments[] = $comment;
    }

    public function getComments() {
        return $this->comments;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        $this->dateUpdated = date("d-m-Y H:i:s");
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }

    public function getDateUpdated() {
        return $this->dateUpdated;
    }

    public function getDateDone() {
        return $this->dateDone;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
    }

    public function getIsDone() {
        return $this->isDone;
    }

    public function markAsDone() {
        $this->isDone = true;
        $this->dateDone = date("d-m-Y H:i:s");
        $this->dateUpdated = date("d-m-Y H:i:s");
    }

    public function getUser() {
        return $this->user;
    }
}