# Week 1 — Chapter 1: Introduction to PHP & MySQL


## 1. How the web works

### HTTP and HTML
- **HTTP** is the set of rules for how the **browser** and the **web server** talk to each other (requests and responses).
- **HTML** is the language used to build web pages that the browser shows.

### Client and Server
- **Client** — the computer (or web browser) that **asks** for something.
- **Server** — the computer that **receives the request** and **sends back an answer**, for example a web page.
- Between them there can be other devices like **routers, proxies and gateways**. They help the request and the response travel correctly.

### The Request / Response steps
1. The browser **asks** the web server for a web page.
2. The web server **sends back** the page.
3. The browser **shows** the page.

```
 Browser (Client)  ── request ──►  Web Server
                   ◄── response ──  (runs PHP, sends HTML)
```

---

## 2. What is PHP?

- PHP is a **server scripting language**. It runs on the **server**, not in the browser.
- PHP code can be **mixed inside HTML**. Much of its syntax comes from **C** and **Java**.
- PHP is **free**, **widely used**, and an alternative to Microsoft's ASP.
- PHP can create HTML, JSON, redirects and other responses.
- PHP can talk to databases like **MySQL**.

### What happens when someone opens a PHP page?
1. The web server runs the PHP code.
2. It does the hidden work (calculations, file work, etc.).
3. It turns the result into **plain HTML**.
4. It sends that HTML to the visitor's browser.

> The visitor **never sees** your PHP code. They only see the HTML result.

---

## 3. What can PHP do?

- Reduce the time needed to build large websites.
- Give each visitor a **custom experience** based on their information.
- Build many kinds of **online tools**.
- Build **shopping carts** for e-commerce websites.
- Collect **form data** and create **dynamic page content**.
- Works on all major **operating systems** and most **web servers**.
- You can use **procedural** programming, **object-oriented** programming, or both.
- Supports many databases: **MySQL, Oracle, SQL Server**.

### Key PHP features
- Server-side execution
- Database connectivity
- Procedural and object-oriented programming
- Form processing
- Session and cookie management
- File handling
- Error handling
- API development
- Framework support (for example **Laravel**)

### Types of websites made with PHP
Social media, e-commerce, blogs & CMS, search engines, knowledge bases, e-learning, entertainment.

---

## 4. Setting up a development server

HTML files can open **without** a server. But **PHP needs a server** to run.
So we install a local server on our computer. It is like a **"sandbox"** where we can write, run and test code safely.

### Server packages
| Name | Operating system |
|---|---|
| **XAMPP** | Cross-platform (Windows, Linux, Mac) — Apache, MySQL, PHP, Perl |
| **WAMP** | Windows only — Windows, Apache, MySQL, PHP |
| **LAMP** | Linux |
| **MAMP** | Mac |

- WAMP was built with **security** in mind.
- Download XAMPP for free from **https://apachefriends.org/download.html**.

### Start the server
1. Open the **XAMPP Control Panel**.
2. Click **Start** for **Apache**.
3. If you will use a database, also start **MySQL**.

### Common problems
- **VMware problem:** VMware can use the same port as Apache (port 443).
  Fix: open **Services**, find **VMware Authorization Service**, right-click → **Stop**.
- **Port 80 is busy:** another program (for example Skype) may use port 80.
  Fix: change Apache to port **8080**, restart it, and use `localhost:8080` in the browser.

### Test the installation
Type one of these in the browser address bar:
```
localhost
127.0.0.1
```
If you changed the port: `localhost:8080`

---

## 5. The Document Root (htdocs)

- The **document root** is the main folder of your local website.
- In XAMPP it is: **`C:\xampp\htdocs`**
- When you type `http://localhost`, the server looks inside this folder.
- Notice: the word `htdocs` does **not** appear in the URL.

| File location | URL in the browser |
|---|---|
| `C:\xampp\htdocs\test\test.html` | `http://localhost/test/test.html` |
| `C:\xampp\htdocs\test\index.php` | `http://localhost/test/` |

---

## 6. Your first PHP page (index page)

- Save the file as **`index.php`** inside `C:\xampp\htdocs\test`.
- Open `http://localhost/test/` — you do **not** need to write `index.php`.
- The **index page** is the page that opens **automatically** when you visit a folder.

---

## 7. Program editor

You can use Notepad, Notepad++, Sublime, Visual Studio Code, and others.
An **IDE** gives extra help: colors for code, auto-complete, debugging, and more.
👉 In this course we use **Visual Studio Code**.

---

## Quick summary

- The **client** asks, the **server** answers.
- **PHP runs on the server** and sends **HTML** to the browser.
- Install **XAMPP** and start **Apache** (and MySQL when needed).
- Put your files in **`C:\xampp\htdocs`** and open them with **`http://localhost/...`**.
- **`index.php`** opens automatically.
