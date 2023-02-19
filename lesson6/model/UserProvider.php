<?php

require_once 'User.php';

class UserProvider
{
    private static array $accounts = [
        'geekbrains' => '123',
        'root' => '321'
    ];

    public static function getByUserNameAndPassword(string $username, string $password): ?User
    {
        $expectedPassword = self::$accounts[$username] ?? null;
        if ($expectedPassword ===  $password) {
            return new User($username);
        }
        return null;
    }
}
