<?php

declare(strict_types=1);

namespace App\Domain;

class User
{
    private function __construct(UserId $userId, Email $email, Username $username, Password $password)
    {
        $this->setId($userId);
        $this->setEmail($email);
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public static function register(UserId $userId, Email $email, Username $username, Password $password)
    {
        return new User($userId, $email, $username, $password);
    }

    private function setPassword(HashedPassword $password)
    {
        $this->password = $password;
    }

    public function getId(): UserId
    {
        return Uuid::fromString($this->id);
    }
}
