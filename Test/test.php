<?php

class User
{
    public string $email;
    public string $password;
    public string $name;

    public function __construct(string $email, string $password, string $name)
    {
        $this->email = $email;
        $this->name = $name;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
    public function getInfo(): string
    {
        return "Имя: {$this->name}, Почта: {$this->email}, Пароль хэширован: {$this->password}";
    }
}

$user1 = new User("test@mail.ru", "1233456", "Test Name");

echo $user1->getInfo();
