<?php

require_once 'User.php';

class UserProvider
{
    private static array $accounts = [
        'geekbrains' => '123',
        'root' => '321'
    ];

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function registrUser(User $user, string $plainPassword): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)'
        );

        return $statement->execute([
            'name' => $user->getName(),
            'username' => $user->getUserName(),
            'password' => md5($plainPassword)
        ]);
    }

    public function getByUserNameAndPassword(string $username, string $password): ?User
    {
        $statement = $this->pdo->prepare(
            'SELECT id, name, username FROM users WHERE username = :username AND password = :password LIMIT 1'
        );

        $statement->execute([
            'username' => $username,
            'password' => md5($password)
        ]);

        return $statement->fetchObject(User::class, [$username]) ?: null;
    }
}
