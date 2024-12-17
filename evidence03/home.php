<?php
session_start();

if(!isset($_SESSION['mySession'])){
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="styles/welcome.css">
</head>
<body>
    <?php
        include_once ("nav.php");
    ?>

    <div class="welcome-container">
        <h1>Welcome to Our Website!</h1>
        <p>We're glad to have you here. Explore and enjoy your journey with us.</p>
        <button onclick="window.location.href='signup.html';" class="btn">Get Started</button>
        <button onclick="window.location.href='logout.php';" class="btn secondary">Logout</button>
    </div>
</body>
</html>
