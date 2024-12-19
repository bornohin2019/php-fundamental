<?php
// connection database:
session_start();
require_once 'connection.php';

// data insert 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$conn) {
        die('Connection Failed: ' . mysqli_connect_error());
    } else {
        $fetch = $conn->query("SELECT * FROM signup");

        if ($fetch->num_rows > 0) {
            while (list($id, $userName, $userEmail, $userPassword) = $fetch->fetch_row()) {
                // echo "$userEmail, $userPassword";
                if ($email == $userEmail && $password == $userPassword) {
                    $_SESSION['mySession'] = $email;
                    header('location:home.php');
                }
                else{
                    $msg = "Email or Password are not match !";
                }
            }
        } else {
            echo "No records found.";
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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
        <div class="text-center">
            <?php
            echo isset($msg) ? $msg : '';
            ?>
            <h2 class="text-2xl font-bold text-gray-700">Welcome Back</h2>
            <p class="text-sm text-gray-500">Login to access your account</p>
        </div>
        <form action="" method="POST" class="mt-6 space-y-6">
            <div class="space-y-4">
                <?php
                // Assuming $conn is your database connection variable

                ?>


                <div>
                    <label for='email' class='block text-sm font-medium text-gray-600'>Email Address</label>
                    <input type='email' id='email' name='email' required class='w-full px-4 py-2 mt-1 text-gray-700 bg-gray-100 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none''>
                </div>
                <div>
                    <label for=' password' class='block text-sm font-medium text-gray-600'>Password</label>
                    <input type='password' id='password' name='password' required class='w-full px-4 py-2 mt-1 text-gray-700 bg-gray-100 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none'>
                </div>
            </div>
            <button type="submit" name="login" class="w-full py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                Login
            </button>
        </form>
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Don’t have an account? <a href="signup.php" class="text-blue-500 hover:underline">Sign up</a>
            </p>
            <p class="text-sm text-gray-600">
                or
            </p>
            <p class="text-sm text-gray-600">
              <a href="forget.php" class="text-blue-500 hover:underline">Forget your password !</a>
            </p>
        </div>
    </div>
</body>

</html>