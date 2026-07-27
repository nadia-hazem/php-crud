<?php

declare(strict_types=1);

namespace App\Database;

use PDO;
use PDOException;

class Database
{
    private PDO $pdo;
    
    private const HOST = 'localhost';
    private const DBNAME = 'php_crud';
    private const CHARSET = 'utf8mb4';

    private const USER = 'root';
    private const PASSWORD = '';

    public function __construct()
    {

        // Build the Data Source Name (DSN)
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=%s',
            self::HOST,
            self::DBNAME,
            self::CHARSET
        );

        try {
            // Create the PDO connection
            $this->pdo = new PDO(
                $dsn,
                self::USER,
                self::PASSWORD,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        } catch (PDOException $e) {
            die('Database connection failed.');
        }
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }

}


