<?php
include 'class.php';

if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $studentObject = new Student($name, $email, $phone, $address);

    $studentObject->save();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles/registration.css">
</head>
<body>
<?php
  include'nav.php';
    
  ?>
    <div class="registration-container">
        <h2>Registration Form</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone:</label>
                <input type="text" id="username" name="phone" required>
            </div>
            <div class="input-group">
                <label for="password">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
   
</body>
</html>
