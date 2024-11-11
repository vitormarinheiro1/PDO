<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infraestructure\Persistence\ConnectionCreator::createConnection();

$student = new Student(
    null,
    'Vitor Marinheiro',
    new \DateTimeImmutable('2004-09-23')
);

// $sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));


if($statement->execute()) {
    echo "Aluno incluído.";
}
