<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Vitor Marinheiro',
    new \DateTimeImmutable('2004-09-23')
);

echo $student->age();