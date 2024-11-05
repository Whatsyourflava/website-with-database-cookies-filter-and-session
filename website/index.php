<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <link rel="stylesheet" href="styles/styles.css">

    <style>
             body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('img/logreg.avif'); /* Ensure this path is correct */
    background-size: cover;
    background-attachment: fixed;
}


    </style>
</head>
<body>

<nav>
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <?php if (isset($_SESSION['user'])) { ?>
            <li><a href="bookstore.php">Bookstore</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php if ($_SESSION['role'] === 'admin') { ?>
                <li><a href="admin.php">Admin Dashboard</a></li>
            <?php } ?>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php } ?>
    </ul>
</nav>

<!-- Main Content -->
<div class="container">
<div class="container">
    <h1>Welcome to the Online Bookstore</h1>
    <p>Explore our wide selection of books and find your next read!</p>
    <a href="bookstore.php" class="button">Browse Books</a>
</div>
</div>

</body>
</html>
