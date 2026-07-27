<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index(): void
    {
        // Instantiate the model
        $user = new User();

        // Retrieve every user
        $users = $user->findAll();

        // Temporary output for testing
        var_dump($users);
    }
}
