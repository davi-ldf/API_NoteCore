# NoteCore API (Simple Notes System)

NoteCore is a simple API developed in Structural PHP for managing notes using a MySQL database. This project allows complete CRUD operations for handling note data.

## Requirements

- PHP 7.0 or higher
- Web server compatible with PHP (e.g., Apache, Nginx)
- MySQL database
- PDO extension enabled.

## Setup

1. Clone this repository to your local environment:

    `git clone https://github.com/davi-ldf/API_NoteCore.git`


2. Import the `notecore.sql` file located in the root of the project in your MySQL database management tool (such as MySQL Workbench, phpMyAdmin, or via command line).


3. Rename the `config.example.php` file to `config.php`.


4. Open the `config.php` file and configure your database credentials:

```php
<?php
$db_host = 'your_host_name';
$db_name = 'notecore';
$db_user = 'your_user';
$db_pass = 'your_password';

```






For more details on how to configure and use NoteCore API, refer to the [Usage](#usage) section in the README.


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


____________________________________________________________________________________________________________________________________________________________________________________________________________________


### README em português


# NoteCore API (Sistema Simples de Anotações)

NoteCore é uma API simples desenvolvida em PHP Estrutural para gerenciar anotações utilizando um banco de dados MySQL. Este projeto permite operações completas de CRUD para manipulação de dados de anotações.

## Requisitos

- PHP 7.0 ou superior
- Servidor web compatível com PHP (por exemplo, Apache, Nginx)
- Banco de dados MySQL

## Configuração

1. Clone este repositório para seu ambiente local:


    `git clone https://github.com/davi-ldf/API_NoteCore.git`

2. Importe o arquivo `notecore.sql` localizado na raiz do projeto no seu gerenciador de banco de dados MySQL (como MySQL Workbench, phpMyAdmin, ou via linha de comando).

3. Renomeie o arquivo `config.example.php` para `config.php`.

4. Abra o arquivo `config.php` e configure as credenciais do banco de dados:

```php
<?php
$db_host = 'seu_host';
$db_name = 'notecore';
$db_user = 'seu_usuario';
$db_pass = 'sua_senha';

```

## Estrutura do Projeto

A estrutura do projeto está organizada da seguinte forma:

- `config.php`: Arquivo de configuração do banco de dados localizado na raiz do projeto.
- `return.php`: Arquivo PHP que gerencia cabeçalhos CORS e saída JSON para respostas da API.

### Diretório API

O diretório `api/` contém os arquivos essenciais da API:

- `ping.php`: Script simples para verificar se a API está em execução.
- `get.php`: Script PHP para recuperar uma única anotação por ID.
- `getall.php`: Script PHP para recuperar todas as anotações.
- `insert.php`: Script PHP para inserir uma nova anotação.
- `update.php`: Script PHP para atualizar uma anotação existente.
- `delete.php`: Script PHP para deletar uma anotação.

Cada script PHP no diretório `api/` corresponde a uma operação específica de CRUD nos dados de anotações.

### Uso

Para interagir com a API, faça requisições HTTP aos endpoints apropriados conforme descrito anteriormente:

- `GET /api/ping` - Verifica se a API está em execução (`/api/ping.php`).
- `GET /api/notes` - Retorna todas as anotações (`/api/getall.php`).
- `GET /api/note/123` - Retorna a anotação com ID 123 (`/api/get.php`).
- `POST /api/note` - Insere uma nova anotação (`/api/insert.php`).
- `PUT /api/note/123` - Atualiza a anotação com ID 123 (`/api/update.php`).
- `DELETE /api/note/123` - Deleta a anotação com ID 123 (`/api/delete.php`).

Certifique-se de que seu ambiente de servidor suporte PHP e que os cabeçalhos CORS estejam corretamente configurados ao incluir `return.php` nos seus scripts da API.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests ou relatar problemas.

## Licença

Este projeto está licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

