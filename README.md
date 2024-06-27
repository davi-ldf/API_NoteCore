# NoteCore API

NoteCore is a simple API developed in Structural PHP for managing notes using a MySQL database. This project allows complete CRUD operations for handling note data.

## Requirements

- PHP 7.0 or higher
- Web server compatible with PHP (e.g., Apache, Nginx)
- MySQL database

## Setup

1. Clone this repository to your local environment:

git clone https://github.com/davi-ldf/API_NoteCore.git


2. Rename the `config.example.php` file to `config.php`.


3. Open the `config.php` file and configure your database credentials:

```php
<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'database_name');

````

## Project Structure

The project is structured as follows:

- `config.php`: Database configuration file located in the root directory.
- `return.php`: PHP file handling CORS headers and JSON output for API responses.

### API Directory

The `api/` directory contains essential API files:

- `ping.php`: Simple script to check if the API is running.
- `get.php`: PHP script to retrieve a single note by ID.
- `getall.php`: PHP script to retrieve all notes.
- `insert.php`: PHP script to insert a new note.
- `update.php`: PHP script to update an existing note.
- `delete.php`: PHP script to delete a note.

Each PHP script in the `api/` directory corresponds to a specific CRUD operation on the notes data.

### Usage

To interact with the API, make HTTP requests to the appropriate endpoints as described previously:

- `GET /api/ping` - Checks if the API is running (`/api/ping.php`).
- `GET /api/notes` - Retrieves all notes (`/api/getall.php`).
- `GET /api/note/123` - Retrieves note with ID 123 (`/api/get.php`).
- `POST /api/note` - Inserts a new note (`/api/insert.php`).
- `PUT /api/note/123` - Updates note with ID 123 (`/api/update.php`).
- `DELETE /api/note/123` - Deletes note with ID 123 (`/api/delete.php`).

Ensure that your server environment supports PHP and that CORS headers are correctly configured by including `return.php` in your API scripts.

## Contribution

Contributions are welcome! Feel free to submit pull requests or report issues.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for more details.
