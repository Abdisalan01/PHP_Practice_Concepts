# Web Application Development — PHP & MySQL

**Lecturer:** Yahye Ali Isse (MSc in Data Science)
**Textbook:** *Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5* (6th Edition) by Robin Nixon



---

## What is this course about?

In this course we learn how to build **dynamic websites and web applications**.
A dynamic website can change its content. For example, it can show your name after you log in, or show products from a database.

We use these technologies:

| Technology | What it does |
|---|---|
| **HTML** | Builds the structure of the web page |
| **CSS** | Makes the page look nice (colors, layout) |
| **PHP** | Runs on the server and creates the page |
| **MySQL** | Saves and reads data (database) |
| **JavaScript & jQuery** | Makes the page interactive in the browser |

**PHP** means *Hypertext Preprocessor*. It is free, popular, and a good choice for making dynamic and interactive web pages.

---

## Course Objectives

By the end of this course, I should be able to:

1. Understand web application development using PHP and MySQL.
2. Develop dynamic and interactive web applications with PHP.
3. Apply fundamental PHP programming concepts.
4. Develop and validate web forms.
5. Use jQuery, AJAX, and JSON for interactive applications.
6. Design databases and perform SQL operations using MySQL.
7. Develop secure PHP and MySQL CRUD applications (Create, Read, Update, Delete).
8. Develop and consume RESTful APIs using PHP and JSON.
9. Implement sessions, authentication, authorization, and basic security.
10. Apply MVC and modern PHP application practices.
11. Apply fundamental Laravel concepts.
12. Design, develop, test, and present a complete PHP and MySQL web application.

---

## What you should know before starting

- **HTML** — the basic tags, and especially **HTML forms**.
- **Basic programming** — for example, what a variable or a loop is.

## What you need

- **XAMPP** (or WAMP) — gives you Apache (web server), MySQL (database) and PHP (language) on your own computer.
- **A text editor** — we use **Visual Studio Code**.
- **A web browser** — Chrome, Edge, Firefox, Opera, etc.
- **Git & GitHub** — to save and share your code.

---

## Folder structure

```
PHP-MySQL-Course/
├── README.md                 ← you are here (course objectives)
├── Week 1/
│   ├── Screen_Shot/
│   │   ├── first php page.png
│   │   └── README.md         ← explains the code
│   ├── index.php             ← the code
│   └── README.md             ← concepts of Chapter 1
├── Week 2/
│   ├── Screen_Shot/
│   │   ├── php basics.png
│   │   ├── variables data types and constants.png
│   │   ├── operators.png
│   │   ├── comparison and conditional statements.png
│   │   ├── loops.png
│   │   ├── break continue and nested loops.png
│   │   └── README.md
│   ├── index.php
│   └── README.md
└── Week 3/
    ├── Screen_Shot/
    │   ├── indexed arrays.png
    │   ├── associative arrays.png
    │   ├── multidimensional arrays.png
    │   ├── array functions part 1.png
    │   ├── array functions part 2.png
    │   ├── functions.png
    │   ├── by reference and default argument.png
    │   ├── variable scope.png
    │   ├── include files.png
    │   └── README.md
    ├── index.php
    ├── library.php           ← used by the include example
    └── README.md
```

| Week | Chapter | Main topics |
|---|---|---|
| [Week 1](Week%201/) | Chapter 1 — Introduction to PHP & MySQL | What is PHP, HTTP, client & server, XAMPP setup, first page |
| [Week 2](Week%202/) | Chapter 2 — PHP Fundamentals & Control Structures | echo/print, comments, variables, data types, constants, operators, if/switch, loops |
| [Week 3](Week%203/) | Chapter 3 — Arrays and Functions in PHP | indexed, associative and multidimensional arrays, array functions, functions, scope, include/require |

---

## How to run the code

1. Install **XAMPP** and start **Apache** from the XAMPP Control Panel.
2. Copy a week folder into `C:\xampp\htdocs\` and give it a name without spaces. For example:
   - `Week 1` → `C:\xampp\htdocs\week1\`
   - `Week 2` → `C:\xampp\htdocs\week2\`
   - `Week 3` → `C:\xampp\htdocs\week3\`
3. Open your browser and go to `http://localhost/week2/` — `index.php` opens by itself.

> If port 80 is busy, change Apache to port **8080** and use `http://localhost:8080/week2/`

---

## References

- Lecturer's notes
- *PHP Manual* by Stig Sæther Bakken
- https://www.w3schools.com and https://www.tutorialspoint.com
- https://www.php.net
- *Learning PHP, MySQL, JavaScript, CSS & HTML5* — Robin Nixon, 6th edition
- *PHP and MySQL for Dynamic Web Sites* — Larry Ullman
