# PHP User Management CRUD Application

This is a complete PHP CRUD (Create, Read, Update, Delete) application for managing user records in a MySQL database.

## Project Structure

```
my-php-project/
├── connect.php      # Database connection configuration
├── delete.php       # Handles user record deletion
├── display.php      # Displays all user records in a table
├── index.php        # Simple welcome page
├── update.php       # Updates existing user records
├── users.php        # Creates new user records
└── README.md        # This documentation file
```

## Description

This project demonstrates fundamental PHP web development concepts including:
- Database connections and operations
- Form handling and validation
- CRUD operations (Create, Read, Update, Delete)
- Bootstrap integration for responsive UI

The application manages user records with fields for name, email, mobile number, and password.

## Setup

1. Place the project in your web server's root directory (e.g., XAMPP's htdocs folder)
2. Create a MySQL database named `sandeep`
3. Create a table named `users` with the following structure:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL,
       mobile VARCHAR(20) NOT NULL,
       password VARCHAR(255) NOT NULL
   );
   ```
4. Update database credentials in `connect.php` if needed
5. Start your web server (Apache/MySQL)
6. Access the application via `http://localhost/my-php-project/`

## Usage

- Navigate to `index.php` for the welcome page
- Go to `users.php` to add new users
- Visit `display.php` to view all users in a table format
- Click "Update" on any record to modify user details
- Click "Delete" on any record to remove users

## Features

- **Create**: Add new users through the form in `users.php`
- **Read**: View all users in a formatted table on `display.php`
- **Update**: Modify existing user records via `update.php`
- **Delete**: Remove user records with confirmation through `delete.php`

## Requirements

- PHP 5.6 or higher
- MySQL/MariaDB
- Web server (Apache/Nginx)
- XAMPP/WAMP/MAMP or similar environment
- Bootstrap CDN access (for styling)

## Security Note

This is a basic educational example. For production use, consider:
- Using prepared statements to prevent SQL injection
- Implementing proper password hashing
- Adding input validation and sanitization
- Including CSRF protection

## License

This project is open source and free to use.
# Crud_operations
