<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <link rel="stylesheet" href="styles/bookstore.css">
    <script src="scripts/cart.js" defer></script>
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

<div class="container">
    <h1>Available Books</h1>
    <div class="book-list">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM books");
        if (mysqli_num_rows($result) > 0) {
            while ($book = mysqli_fetch_assoc($result)) {
                echo "<div class='book'>";
                echo "<img src='" . htmlspecialchars($book['image']) . "' alt='" . htmlspecialchars($book['title']) . "' class='book-image'>";
                echo "<h3>" . htmlspecialchars($book['title']) . "</h3>";
                echo "<p>Author: " . htmlspecialchars($book['author']) . "</p>";
                echo "<p>Description: " . htmlspecialchars($book['description']) . "</p>"; 
                echo "<p>Price: ₱" . number_format($book['price'], 2) . "</p>"; 
                echo "<button onclick='addToCart(" . $book['id'] . ")'>Add to Cart</button>";
                echo "</div>";
            }
        } else {
            echo "<p>No books available at the moment. Please check back later!</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
