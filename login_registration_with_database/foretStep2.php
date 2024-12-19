<?php
// connection database:
session_start();
require_once 'connection.php';

// data insert 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-lg">
        <div class="text-center">
            <?php
            echo isset($msgUser)?$msgUser:'';
            
            ?>
            <h2 class="text-2xl font-bold text-gray-700">Create New Password</h2>
            <p class="text-sm text-gray-500">Sign up to get started!</p>
        </div>
        <form action="#" method="POST" class="space-y-6">
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-600">Full Name</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 mt-1 text-gray-700 bg-gray-100 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 mt-1 text-gray-700 bg-gray-100 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-600">New Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-1 text-gray-700 bg-gray-100 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
            </div>
            <button type="submit" name="submit" class="w-full py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                Sign Up
            </button>
        </form>
        <div class="text-center">
            <p class="text-sm text-gray-600">
                <a href="login.php" class="text-blue-500 hover:underline">Login</a>
            </p>
        </div>
    </div>
</body>

</html>