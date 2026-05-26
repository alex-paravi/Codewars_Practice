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


$targetId = 3;
$newRole = 'admin';

$sql = "UPDATE users SET role = :role WHERE id = :id";

$statement = $db->prepare($sql);

$statement->execute([
    'role' => $newRole,
    'id' => $targetId
]);

echo "Роль пользователя успешно обновлена на admin!\n";
