<?php
    // include connection mysql
    require_once('conn.php');

    if(isset($_POST['insert'])){
        // $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $insert = "INSERT INTO trainee_info (name, email, phone) VALUES ('$name', '$email', '$phone')";
        if(mysqli_query($conn, $insert) == TRUE){
            echo "Data Inserted";
            header('location:display.php');
        }
        else{
            echo "Not Inserted ";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link rel="stylesheet" href="styles/insert.css">
</head>
<body>
    <div class="login-container">
        <h2>Data Insert</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Name:</label>
                <input type="text" id="username" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="Phone">Phone:</label>
                <input type="number" id="email" name="phone" required>
            </div>
            <button type="submit" name="insert">Insert</button>
            <p class="forgot-email"><a href="#"></a></p>
        </form>
    </div>
</body>
</html>
