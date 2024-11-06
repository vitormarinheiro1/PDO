<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students WHERE id = 1;');
// USO DO FETCH COLUMN
// var_dump($statement->fetchColumn(1)); exit();

// USO DO FETCH PARA BUSCA DE APENAS ALGUNS DADOS
// while($studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
//     $student = new Student(
//         $studentData['id'],
//         $studentData['name'],
//         new \DateTimeImmutable($studentData['birth_date']));

//         echo $student->age() . PHP_EOL;
// }
// exit();

$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date']));
}

var_dump($studentList);
