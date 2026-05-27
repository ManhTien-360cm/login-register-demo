# 🔐 Login & Register Demo

A simple yet functional user authentication web application built with **PHP** and **MySQL**, featuring a clean and responsive UI.

---

## 📸 Demo

> _Add a screenshot or GIF of your project here_
> 
> ![demo screenshot](./screenshot.png)

🔗 **Live Demo:** [View on GitHub Pages / Hosting](#) _(replace with your link)_

---

## ✨ Features

- 📝 **User Registration** — Create a new account with username, email, and password
- ✅ **Form Validation** — Client-side and server-side input validation
- 🔒 **Secure** — Passwords stored safely, SQL injection prevention with prepared statements
- 📱 **Responsive Design** — Works on desktop and mobile devices

---

## 🛠️ Tech Stack

| Layer      | Technology              |
|------------|-------------------------|
| Front-end  | HTML5, CSS3, JavaScript |
| Styling    | Bootstrap / Tailwind CSS |
| Back-end   | PHP (Core)              |
| Database   | MySQL                   |
| Deployment | GitHub Pages / Hosting  |

---

## 📁 Project Structure

```
login-register-demo/
├── index.php           # Landing / Login page
├── register.php        # Registration page
├── logout.php          # Logout handler
├── config/
│   └── db.php          # Database connection
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── main.js
└── data/
    └── db/             # Database schema / SQL file
```

---

## ⚙️ Getting Started

### Prerequisites

- PHP >= 7.4
- MySQL >= 5.7
- A local server: [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ManhTien-360cm/login-register-demo.git
   cd login-register-demo
   ```

2. **Set up the database**
   - Open **phpMyAdmin** or any MySQL client
   - Create a new database named `auth_demo`
   - Import the SQL file from `data/db/`

3. **Configure the database connection**
   - Open `config/db.php`
   - Update your credentials:
   ```php
   $host = "localhost";
   $dbname = "auth_demo";
   $username = "root";
   $password = "";
   ```

4. **Run the project**
   - Place the project folder inside `htdocs/` (XAMPP) or `www/` (WAMP)
   - Start Apache and MySQL
   - Visit: `http://localhost/login-register-demo`

---

## 🔐 Security Practices Applied

- Prepared statements to prevent **SQL Injection**
- `htmlspecialchars()` to prevent **XSS attacks**
- Server-side validation for all form inputs
- Password length and format enforcement

---

## 📚 What I Learned

- Building a complete authentication flow from scratch
- Connecting PHP back-end to MySQL database
- Implementing security best practices in web development
- Creating responsive layouts with HTML/CSS

---

## 🚀 Future Improvements

- [ ] Add login & logout functionality
- [ ] Implement password hashing (`password_hash()`)
- [ ] Add "Remember Me" session persistence
- [ ] Add admin/user role separation
- [ ] Migrate to Node.js + Express for REST API

---

## 👤 Author

**Manh Tien**  
🐙 GitHub: [@ManhTien-360cm](https://github.com/ManhTien-360cm)

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).
