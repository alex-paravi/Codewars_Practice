<?php

$db = new PDO('sqlite:' . __DIR__ . '/my_app.db');

$deletedId = 7;

$sql = "DELETE FROM users WHERE id = :id";

$statement = $db->prepare($sql);

$statement->execute([
    'id' => $deletedId
]);

echo "Пользователь с ID {$deletedId} успешно удалён";
