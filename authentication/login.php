<?php
session_start();
if(isset($_POST['btnSubmit'])){
    $userName = $_POST['username'];
    $userPassword = $_POST['password'];

    $file = file('auth.txt');
    foreach($file as $singleData){
        list($storeName,$storePassword)=explode(',',trim($singleData));

        if(trim($userName) == $storeName && trim($userPassword)== $storePassword){
            $_SESSION['mySession']= $userName;
            header('location:demo.php');
        }
        else{
            $msg="Username or Password is incorrect!";
        }

    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .login-form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-form label {
            display: block;
            margin-bottom: 5px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form class="login-form" action="#" method="post">
        <h2>Login</h2>
        <?php
        echo isset($msg)?$msg:'';
        ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" name="btnSubmit">Login</button>
    </form>
</body>
</html>
