<?php
session_start();
include 'db.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = md5(htmlspecialchars(trim($_POST['password'])));
    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        
        setcookie("username", $user['username'], time() + (86400 * 30), "/"); 
        header("Location: bookstore.php");
        exit();
    } else {
        echo "Invalid login credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/logreg1.css">

    <style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('img/bg.jpg'); 
    background-size: cover;
    background-attachment: fixed;
}


 </style>
</head>
<body>
<div class="form-box"> <!-- New form-box container -->
        <div class="container">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <div class="input-box"> <!-- New input-box container -->
                    <span><ion-icon name="person-sharp"></ion-icon></ion-icon></span>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-box"> <!-- New input-box container -->
                    <span><ion-icon name="lock-closed-sharp"></ion-icon></span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Login</button>    
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </form>
        </div>
    </div>
  
    <?php if ($error): ?>
            <div class="error-message"><?php echo $error; ?></div> 
        <?php endif; ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

   
</body>
</html>