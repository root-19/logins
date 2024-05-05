# PHP Login System with MySQL Database

This is a simple PHP login system with MySQL database connectivity and validation.

## Setup Instructions

1. **Database Setup**
   - Create a MySQL database named `login`.
   - Create a table named `users` with columns `id` (auto-increment), `username`, and `password`.

2. **Configure Database Connection**
   - Open `config/configuration.php`.
   - Update `DB_USER`, `DB_PASS`, and other constants with your MySQL database credentials.

3. **Create Validation Function**
   - Open `config/validation.php`.
   - Implement the `ValidateLogin` function to validate user login credentials against the database.

4. **Create Login Form**
   - Open `login.php`.
   - Include `configuration.php` and `validation.php`.
   - Implement the login form HTML with Bootstrap styles.
   - Handle form submission to validate user credentials using the `ValidateLogin` function.

5. **Display Login Status**
   - Modify the login logic in `login.php` to display appropriate messages for successful and failed logins.

6. **Create Index File**
   - Create an `index.php` file to include the `login.php` file.

7. **Testing**
   - Run your PHP application locally or on a server with PHP and MySQL support.
   - Open the application in a web browser and test the login functionality.
