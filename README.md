## Overview
This project implements a user login system using Laravel. It features user registration, authentication, and invitation functionalities. The codebase is organized with repositories, services, DTOs, and actions to promote clean architecture and separation of concerns. API routes are defined for user-related operations, and unit tests are provided to ensure reliability. The system is designed for extensibility and maintainability, following best practices in modern PHP development.

## Set Up instructions
```
git clone https://github.com/your-username/user-login.git
cd user-login
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan:db seed
php artisan serve
php artisan test
```
## Apis

User Authentication & Management

1. Invite User
Endpoint: POST /api/user/invite
Body:
first-name (string, required)
last-name (string, required)
email (string, required)
Response: {
    "status": true,
    "message": "User invited successfully",
    "data": {
        "first-name": "Nithin",
        "last-name": "Pankajakshan",
        "email": "pnithin6@gmail.com"
    },
    "error": [],
    "response_code": 200
}

2. Get Invited User
Endpoint: get /api/magic-link/user?token=68a860ac430da

Response: {
    "status": true,
    "message": "User found",
    "data": {
        "user_id": 0,
        "first_name": "Nithin",
        "last_name": "Pankajakshan",
        "email": "pnithin36@gmail.com",
        "password": "",
        "company_name": "",
        "DOB": "",
        "contact_number": "",
        "is_admin": false,
        "is_pending": false,
        "otp": "",
        "created_at": "",
        "updated_at": "",
        "remember_token": "",
        "token": ""
    },
    "error": [],
    "response_code": 200
}
## Libraries/Tools used

Laravel Framework: PHP web application framework for routing, ORM, migrations, and authentication.

Composer: Dependency management for PHP packages.

XAMPP: Local development environment for PHP and MySQL.

Postman: API testing and development tool.

VS Code: Source code editor and IDE.

Eloquent ORM: Laravel’s ORM for database interactions.

Sanctum: Laravel package for API authentication (if enabled).

Git: Version control system.

