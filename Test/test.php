<?php

class User
{
    public function __construct(
        public string $email,
        public string $password,
        public string $name
    ) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
    public function getInfo()
    {
        return "Имя пользователя: {$this->name}, Почта: {$this->email}, Пароль хэширован :{$this->password}";
    }
}

$user1 = new User("test@mail.ru", "1233456", "Test Name");

echo $user1->getInfo();
