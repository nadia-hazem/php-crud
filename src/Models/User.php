<?php

declare(strict_types=1);

namespace App\Models;

use App\Database\Database;
use PDO;

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $database = new Database();

        $this->pdo = $database->getConnection();
    }

    public function findAll(): array
    {
        $sql = 'SELECT * FROM users';

        // Prepare the SQL statement
        $statement = $this->pdo->query($sql);

        // Return every record from the table
        return $statement->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $sql = 'SELECT * FROM users WHERE id = :id';

        // Prepare the SQL query
        $statement = $this->pdo->prepare($sql);

        // Execute the query with the provided parameter
        $statement->execute([
            'id' => $id
        ]);

        return $statement->fetch();
    }

    public function create(string $firstname, string $lastname): bool
    {
        $sql = 'INSERT INTO users (firstname, lastname)
                VALUES (:firstname, :lastname)';

        // Prepare the SQL query
        $statement = $this->pdo->prepare($sql);

        // Execute the query the provided parameters
        return $statement->execute([
            'firstname' => $firstname,
            'lastname'  => $lastname
        ]);
    }

    public function update(
        int $id,
        string $firstname,
        string $lastname
    ): bool
    {
        $sql = 'UPDATE users
                SET firstname = :firstname,
                    lastname = :lastname
                WHERE id = :id';

        // Prepare the SQL statement
        $statement = $this->pdo->prepare($sql);

        // Execute the statement with the provided values and return the result
        return $statement->execute([
            'id'        => $id,
            'firstname' => $firstname,
            'lastname'  => $lastname
        ]);
    }

    public function delete(int $id): bool
    {
        $sql = 'DELETE FROM users
                WHERE id = :id';

        // Prepare the SQL statement
        $statement = $this->pdo->prepare($sql);

        // Execute the statement with the provided value and return the result
        return $statement->execute([
            'id' => $id
        ]);
    }



}
