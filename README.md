# Banking Website (PHP)

Welcome to the **Banking Website**, a web-based application developed using PHP, HTML, CSS, and JavaScript. This project provides essential banking functionalities such as account management, login authentication, and a user-friendly dashboard.

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Directory Structure](#directory-structure)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)
- [Contact](#contact)

---

## Overview
This project is designed to simulate an online banking system where users can sign up, log in, and manage their accounts. The frontend is built using HTML, CSS, and JavaScript, while the backend is powered by PHP with database connectivity for user authentication and account management.

---

## Features
- User authentication (Signup & Login)
- Secure account management
- Banking services information
- Responsive design for better user experience
- Structured backend using PHP
- Connected to a database for storing user data

---

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL (to store user details and transactions)
- **Styling:** CSS, including responsive design
- **Version Control:** Git & GitHub

---

## Directory Structure
```
└── mks2002-banking_website_php/
    ├── about.html             # About Us Page
    ├── blogs.html             # Blog Page
    ├── contact.html           # Contact Page
    ├── index.html             # Home Page
    ├── index.js               # JavaScript file for interactivity
    ├── service.html           # Services Page
    ├── css/
    │   ├── index.css          # Main CSS file
    │   └── responsive.css     # Styles for responsive design
    ├── images_videos/         # Images & Videos used in the website
    │   ├── 3.JPG
    │   ├── blog1.webp
    │   ├── buisness_loan.avif
    │   ├── instant.webp
    │   ├── life_insurance.webp
    │   ├── main.webp
    │   └── main_page_blog.webp
    └── PHP/
        ├── account_detail.php # User account details
        ├── backend2.php       # Backend logic
        ├── connect.php        # Database connection file
        ├── dashboard.php      # User dashboard
        ├── login.php          # Login Page
        ├── login_check.php    # Login authentication
        └── signup.php         # Signup Page
```

---

## Installation
### Prerequisites
- XAMPP or WAMP (for running PHP and MySQL)
- Web browser (Chrome, Firefox, etc.)
- Code editor (VS Code, Sublime, etc.)

### Steps to Run the Project
1. **Clone the Repository**
   ```bash
   git clone https://github.com/mks2002/Banking_website_php.git
   ```
2. **Move the project to XAMPP/WAMP server directory**
   ```bash
   mv Banking_website_php /xampp/htdocs/
   ```
3. **Start Apache & MySQL in XAMPP/WAMP**
4. **Create a Database**
   - Open `phpMyAdmin`
   - Create a database (e.g., `banking_db`)
   - Import the provided SQL file (if available) or create necessary tables
5. **Configure Database Connection**
   - Open `connect.php`
   - Set up database credentials:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "banking_db";
     ```
6. **Run the Application**
   - Open browser and go to:
     ```
     http://localhost/Banking_website_php/
     ```
   - Signup or Login to access features

---

## Usage
- **Sign Up**: Create an account by providing necessary details.
- **Login**: Authenticate using email and password.
- **Dashboard**: Access your banking details and services.
- **Contact Page**: Send inquiries and feedback.
- **Blog Section**: Read articles related to banking and finance.

---



## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Contact
For any queries or feedback, reach out to:
- **GitHub**: [mks2002](https://github.com/mks2002)
- **Email**: [mayuksarkar12345@gmail.com](mailto:mayuksarkar12345@gmail.com)

---

