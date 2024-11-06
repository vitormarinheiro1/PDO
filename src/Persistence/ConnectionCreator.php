<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

// static create method
class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';

        return new PDO('sqlite' . $databasePath);
    }
}
