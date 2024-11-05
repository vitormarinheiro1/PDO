<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students;');
$studentList = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($studentList);
