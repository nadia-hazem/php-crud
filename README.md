# PHP CRUD

Part of the **Pictelle Developer Templates** collection.

Built on top of the PHP MVC Starter.

This project is designed as a learning resource as much as a reusable foundation for future web applications. The goal is to understand how an MVC architecture works internally by building every component from scratch, without relying on a full-featured framework.

---

## Features

* Modern PHP 8+
* Lightweight MVC architecture
* PSR-4 autoloading with Composer
* Custom Router
* Dynamic controller dispatching
* Clean project structure
* Public directory as web root
* Vanilla PHP (no framework)

---

## Project Structure

```text
crud-mvc-template/
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
git clone https://github.com/your-username/crud-mvc-template.git
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

* ✅ Composer & PSR-4
* ✅ Router
* ✅ Dynamic Controller Dispatch
* ⬜ View Engine
* ⬜ Database Connection
* ⬜ Models
* ⬜ CRUD Operations
* ⬜ Validation
* ⬜ Sessions
* ⬜ Authentication
* ⬜ File Upload
* ⬜ Pagination

---

## Learning Goals

This repository is part of a collection of educational templates built for **Pictelle**, an independent digital craft workshop.

Each template focuses on understanding a specific aspect of web development while remaining practical enough to be reused in real projects.

---

## License

MIT License.
