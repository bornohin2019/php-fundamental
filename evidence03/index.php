<?php
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $password = $_POST['password'];

        $file = file('data.txt');

        foreach($file as $singleData){
            list($userName, $userPassword) = explode(',', trim($singleData));
            if(trim($name) === $userName && trim($password) === $userPassword){
                $_SESSION['mySession'] = $name;
                header('location:home.php');
            }
            else{
                $msg = "User or password Incorrect";
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
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
           echo  isset($msg)?$msg:'';
        ?>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">Login</button>
            <p class="forgot-password"><a href="signup.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
