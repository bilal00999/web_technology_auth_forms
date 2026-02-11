# web_technology_auth_forms

# PHP Authentication App

A simple authentication system built with core PHP, HTML, and CSS.

This project demonstrates how login, signup, sessions, and protected pages work without any framework or database. It stores users in a text file and uses PHP sessions for authentication.

It is ideal for beginners who want to understand the basics before moving to MySQL or frameworks like Laravel.

Features

* User signup with name, email, phone, and password
* User login with email and password
* Session based authentication
* Protected dashboard page
* Logout support
* File based storage using users.txt
* Clean responsive UI with custom CSS

Project Structure

auth app/

* login.php, handles login logic
* signup.php, handles registration
* dashboard.php, protected page after login
* logout.php, ends session
* style.css, UI design
* users.txt, stores user data

How It Works

Signup

* User submits the form
* Data is saved to users.txt
* Format: name,email,phone,password

Login

* PHP reads users.txt line by line
* Compares email and password
* If matched, session starts
* Redirects to dashboard

Dashboard

* Checks if session exists
* If not logged in, redirects to login page

Tech Stack

* PHP
* HTML5
* CSS3
* PHP Sessions
* File handling functions like file() and file_put_contents()

How To Run

Step 1
Install a local server like XAMPP or Laragon

Step 2
Move the project folder into:
htdocs for XAMPP
www for Laragon

Step 3
Start Apache server

Step 4
Open browser:
http://localhost/auth app/login.php

Security Notes

This project is for learning only.

Passwords are stored in plain text. This is not safe for production.

For real projects you should:

* Hash passwords using password_hash()
* Use MySQL or PostgreSQL instead of text files
* Validate inputs
* Prevent SQL injection and XSS
* Add CSRF protection

Future Improvements

* Add password hashing
* Use database instead of users.txt
* Add email verification
* Add remember me feature
* Add admin panel
* Add form validation with JavaScript

What You Learn

You understand:

* Sessions
* Form handling
* File storage
* Redirects
* Basic authentication flow

This is the raw mechanics of web security. Frameworks automate this later, but this shows what actually happens behind the curtain.

License

Free to use for learning and educational purposes.
