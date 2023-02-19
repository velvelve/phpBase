<?php

class User
{
    private string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function getUserName(): string
    {
        return $this->username;
    }
}
