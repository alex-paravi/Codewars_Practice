<?php

class User
{
    public $id;
    public $name;
    public $email;
    public $role;

    public function getInfo()
    {
        return "Привет, меня зовут {$this->name}, моя роль: {$this->role}";
    }
}
$db = new PDO('sqlite:my_app.db');

$query = $db->query("SELECT * FROM users WHERE id = 2");

$query->setFetchMode(PDO::FETCH_CLASS, 'User');

$user = $query->fetch();

echo $user->getInfo();
