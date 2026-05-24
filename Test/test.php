<?php

class User
{
    public function __construct(
        protected string $email,
        protected string $password,
        protected string $name
    ) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
    public function getInfo(): string
    {
        return "Имя пользователя: {$this->name}, Почта: {$this->email}, Пароль хэширован :{$this->password}";
    }
}

class Admin extends User
{

    public function getInfo(): string
    {
        return "Уровень: Администратор | Имя: {$this->name}, Почта: {$this->email}";
    }

    public function banUser(string $userName): string
    {
        return "Администратор {$this->name} забанил пользователя {$userName}";
    }
}

class Manager extends User
{
    public function getInfo(): string
    {
        return "Уровень: Менеджер | Имя: {$this->name}, Почта: {$this->email}";
    }

    public function createOrder(string $product): string
    {
        return "Менеджер {$this->name} создал заказ на товар {$product}";
    }
}
$user1 = new User("test@mail.ru", "1233456", "Test Name");
$user2 = new User("Иван@mail", "5452335", "Иван");
$admin1 = new Admin("admin@mail.ru", "2321351", "Admin");
$manager1 = new Manager("manager@mail", "23123124", "Manager Name");
$product = "Random Product";

echo $user1->getInfo() . PHP_EOL;
echo $admin1->banUser("Иван") . PHP_EOL;
echo $manager1->getInfo() . PHP_EOL;
echo $manager1->createOrder($product);
