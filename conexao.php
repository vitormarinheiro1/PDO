<?php

$pdo = \Alura\Pdo\Infraestructure\Persistence\ConnectionCreator::createConnection();

echo "Conectei";

$pdo->exec("CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);");
