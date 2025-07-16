Open your browser and visit:

http://127.0.0.1:8000/index

📚 Book Management System (Laravel)
A simple Laravel project for managing books and authors with a modern, clean dashboard.
🚀 Features
📖 Manage Books — Create, update, delete, and list books.

✍️ Manage Authors — Create, update, delete, and list authors.

📊 Dashboard — View total books and authors in stylish cards.

🔎 Search UI — Centered search bar similar to Google style.

🖥️ Responsive Design — Sidebar with header, works on all devices.

💡 Modern UI — Built with Bootstrap 5.

🗂️ Project Structure

# 📚 Laravel AuthorBook Management Application

This Laravel application is designed to manage **Authors** and their **Books**, supporting full CRUD functionality and an integrated chatbot for real-time data querying.

## 🧾 Project Description

This application allows users to:

- Manage authors and their related books.
- View author-book relationships.
- Interact with a simple chatbot that can provide insights into the database in real time.

## ✅ Features

- **Authors Module**
  - Create, read, update, and delete authors.
  - Display number of books per author in the authors list.
  - View detailed author information along with a list of their books.

- **Books Module**
  - Create, read, update, and delete books.
  - Associate each book with an author.
  
- **Chatbot Integration**
  - Responds to specific queries:
    - “How many authors are there?”
    - “How many books are available?”
    - “List top 5 authors.”

- **Validations**
  - Form validation is enforced during creation and update of both authors and books.

## 🛠️ Installation & Setup Instructions


1. **Clone the repository:**

   ```bash
   git clone https://github.com/tinotino324/book_and_authors.git


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


app/
├── Http/
│    └── Controllers/
│         └── Mycontroller.php
├── Models/
│    ├── Author.php
│    └── Book.php
├── Helpers/
│      └── form_helper.php


resources/views/
├── layouts/
|    ├── app.blade.php
│    ├── header.blade.php
│    └── sidebar.blade.php
├── books/
│    └── index.blade.php
├── authors/
│    └── index.blade.php
├── chatbot/
│    └── index.blade.php
├── dashboard/
│    └── index.blade.php

routes/
└── web.php

database/Migrations/
└── author_books.php

public/
└── datatable.js

Command :
1. php artisan serve
2. php artisan migrate:fresh