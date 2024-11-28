
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }
        nav .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #4CAF50;
        }
        nav .menu-button {
            display: none;
            font-size: 1.5rem;
            color: white;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                display: none;
                width: 100%;
                background-color: #333;
            }
            nav ul.active {
                display: flex;
            }
            nav .menu-button {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="#" class="logo">MySite</a>
        <div class="menu-button" onclick="toggleMenu()">☰</div>
        <ul id="nav-links">
            <li><a href="demo.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="display.php">Display</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <script>
        function toggleMenu() {
            const navLinks = document.getElementById('nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>



