<?php

namespace Alura\Pdo\Infraestructure\Persistence;

use PDO;

// static creation method
class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';

        return new PDO('sqlite' . $databasePath);
    }
}
