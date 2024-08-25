# Login Page Project

## Description

This project is a simple login system that includes a signup process where user information is stored in a MySQL database. The user can then log in, and their credentials will be checked against the database. If the credentials are correct, the user is redirected to the main page; otherwise, an error message is shown.

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:
- **XAMPP**: A local server environment that includes Apache, MySQL, PHP, and Perl.
- **MySQL**: Included with XAMPP, used for the database.

## Setup

### Step 1: Clone the repository

```bash
git clone https://github.com/mukilan-107/login_Page.git
```

### Step 2: Start XAMPP

1. Open the XAMPP Control Panel.
2. Start the Apache and MySQL modules.

### Step 3: Set up the MySQL Database

1. Open [phpMyAdmin](http://localhost/phpmyadmin/) from your XAMPP control panel.
2. Create a new database named `signup`.
3. Create a table named `details` with the following structure:
   1.Create row id-primary,
   2.create row name,
   3.create row email,
   4.create row pass,
   5.create row pass1,
   6.create row mobile.

### Step 4: Configure the Database Connection

1. Open the `DB/config.php` file.
2. Update the MySQL database connection parameters if needed:

```php
<?php
  $hostname='localhost';
  $username='root';
  $password='';
  $databasename='signup';
  $port=3306;

  $mysqli = mysqli_connect($hostname,$username,$password,$databasename,$port);
?>
```

### Step 5: Run the Project

1. Place the project folder in the `htdocs` directory of your XAMPP installation.
2. In your web browser, go to `http://localhost/filename`.
3. You should see the signup page first. After signing up, you can log in with the created credentials.

## Files

- **index.php**: Contains the signup and login forms.
- **login.php**: Processes the login form data.
- **main.php**: The main page shown after successful login.
- **style.css**: Contains styles for the login and main pages.

## Usage

1. Navigate to `index.php` in your browser to access the signup page.
2. Enter your details to sign up. The data will be stored in the database.
3. Use the same credentials to log in. If successful, you will be redirected to `main.php`; if not, an error message will be shown.

##Images

![Screenshot (39)](https://github.com/user-attachments/assets/9bde3e6a-14b9-418f-b07e-0ec1df752415)
