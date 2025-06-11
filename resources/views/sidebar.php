<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            padding: 1rem;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 0.5rem 1rem;
            margin-bottom: 0.5rem;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 2rem;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-white">Dashboard</h4>
        <a href="<?= ('author') ?>">Authors</a>
        <a href="<?= ('books') ?>">Books</a>
        <a href="<?= ('chatbot') ?>">Chatbot</a>
    </div>

    <div class="container content">
        <h1>Welcome to the AuthorBook Management App</h1>
        <p class="lead">This app allows you to manage authors and their books, and chat with a bot for quick insights.</p>

        <div class="nav-links">
            <a href="<?= ('author') ?>">Authors</a>
            <a href="<?= ('books') ?>">Books</a>
            <a href="<?= ('chatbot') ?>">Chatbot</a>
        </div>
    </div>

</body>
</html>
