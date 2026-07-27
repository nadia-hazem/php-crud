# PHP CRUD

Part of the **PICTELLE PHP Starters** collection.

Built on top of the PHP MVC Starter.

This project extends the starter by introducing a complete database layer based on PDO, models and CRUD operations while preserving the educational philosophy of the collection.

---

## Features

- Built on top of PHP MVC Starter
- Modern PHP 8+
- Lightweight MVC architecture
- PDO database layer
- Database service
- User Model
- CRUD operations
- Prepared statements
- PSR-4 autoloading
- Clean project structure
- Vanilla PHP (no framework)

---

## Project Structure

```text
php-crud/
│
├── public/
│   └── index.php
│
├── routes.php
│
├── src/
│   ├── Controllers/
│   ├── Core/
│   ├── Models/
│   └── Views/
│
├── vendor/
├── composer.json
└── README.md
```

---

## Requirements

* PHP 8.2 or higher
* Composer
* Apache (or equivalent web server)

---

## Installation

Clone the repository

```bash
git clone https://github.com/your-username/php-crud.git
```

Install dependencies

```bash
composer install
```

Start your local server and configure the **public/** directory as the document root.

---

## Routing

Routes are declared inside:

```text
routes.php
```

Example:

```php
$router->get('/', [HomeController::class, 'index']);
```

The Router automatically:

* matches the requested URI
* instantiates the controller
* calls the requested method

---

## Philosophy

This project intentionally avoids large frameworks.

Every component is implemented progressively to understand:

* routing
* controllers
* models
* views
* application flow
* object-oriented programming

The objective is not to compete with Laravel or Symfony, but to learn the underlying concepts while keeping the code readable and maintainable.

---

## Roadmap

- ✅ PDO Database Connection
- ✅ Database Class
- ✅ User Model
- ✅ Read Operations
- ✅ Create Operation
- ✅ Update Operation
- ✅ Delete Operation
- ⬜ View Engine
- ⬜ Dynamic Routes
- ⬜ Form Validation
- ⬜ Flash Messages
- ⬜ Error Handling

---

## Related Templates

- PHP MVC Starter
- PHP CRUD
- PHP View Engine *(coming next)*
- Dynamic Routing *(planned)*

---

## Learning Goals

This repository is part of the **PICTELLE PHP Starters** collection, developed by **Pictelle**, an independent digital craft workshop.

Each starter explores a specific aspect of modern PHP development while remaining practical enough to be reused in real projects.

This volume introduces database interaction in an MVC application through PDO, models and a complete CRUD implementation built progressively from scratch.

---

## License

MIT License.
