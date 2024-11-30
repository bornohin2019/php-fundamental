<?php
session_start();

// require_once 'demo.php';

if (isset($_POST['btnSubmit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    $file = file('data.txt');

    foreach ($file as $singleData) {
        list($storeUser, $storePassword) = explode(',', trim($singleData));

        if (trim($user) == $storeUser && trim($password) == $storePassword) {
            $_SESSION['mySession'] = $user;
            header('location:demo.php');
        } else {
            $msg = "username or password is incorrect!!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        echo isset($msg) ? $msg : '';
        ?>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required placeholder="badhon">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="123">
            </div>
            <button type="submit" name="btnSubmit">Login</button>
            <p class="forgot-password"><a href="#">Forgot password?</a></p>
        </form>
    </div>
</body>

</html>