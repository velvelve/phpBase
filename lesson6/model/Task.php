<?php
class Task
{
    private bool $isDone;
    private string $description;

    public function __construct($isDone, $description)
    {
        $this->isDone = $isDone;
        $this->description = $description;
    }

    public function getIsDone()
    {
        return $this->isDone;
    }

    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
