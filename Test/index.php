<?php

$db = new PDO('sqlite:' . __DIR__ . '/my_app.db');

$newName = 'Дмитрий';
$newEmail = 'dima@mail.ru';
$newRole = 'user';

$sql = "INSERT INTO users (name, email, role) VALUES(:name, :email, :role)";
$statement = $db->prepare($sql);

$statement->execute([
    'name' => $newName,
    'email' => $newEmail,
    'role' => $newRole
]);

echo "новый пользователь добавлен в базу!\n";
