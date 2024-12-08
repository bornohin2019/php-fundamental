<?php
// include connection file
require_once 'connection.php';

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $insert = "INSERT INTO employee_info (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if(mysqli_query($connection, $insert) == TRUE){
        echo "Insert Successfully!";
        header('location:display.php');
    }
    else{
        echo "Not Insert Data!";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="styles/insert.css">
   
</head>
<body>
    <div class="signup-container">
        <h1>Insert Information</h1>
        <p></p>
        <form action="#" method="post">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="phone" id="phone" name="phone" placeholder="Enter Your number" required>
            </div>
            <button type="submit" class="signup-button" name="submit">Insert</button>
        </form>
        <!-- <p class="disclaimer">Your privacy is our priority. We never share your details with anyone.</p> -->
    </div>
</body>
</html>
