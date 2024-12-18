<?php
session_start();
if(!isset($_SESSION['mySession'])){
    header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">MyWebsite</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Services</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                    <li><a href="logout.php" class="hover:underline">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <section class="text-center py-16 bg-white shadow-md rounded-lg">
            <h2 class="text-4xl font-bold text-gray-700">Welcome to MyWebsite</h2>
            <p class="text-gray-500 mt-4">Your one-stop solution for amazing web experiences.</p>
            <a href="#" class="mt-6 inline-block px-6 py-3 text-white bg-blue-500 rounded-lg shadow-md hover:bg-blue-600">Get Started</a>
        </section>

        <section class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-700">Feature 1</h3>
                <p class="text-gray-500 mt-2">Description of the first feature of your website.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-700">Feature 2</h3>
                <p class="text-gray-500 mt-2">Description of the second feature of your website.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-700">Feature 3</h3>
                <p class="text-gray-500 mt-2">Description of the third feature of your website.</p>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white mt-16 py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 MyWebsite. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
