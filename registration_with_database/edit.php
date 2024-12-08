<?php
require_once('conn.php');

if($_GET['editId']){
    $getId = $_GET['editId'];

    $sql = "SELECT * FROM trainee_info WHERE id = $getId";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql1 = "UPDATE trainee_info SET name = '$name', email = '$email', phone = '$phone' WHERE id = $id";
    
    if(mysqli_query($conn, $sql1) == TRUE){
        header ('location:display.php');
        echo "data updated!";
    }
    else{
        echo 'data not update';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/edit.css">
    <title>Edit</title>
</head>
<body>
<div class="login-container">
        <h2>Data Update</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
            <div class="input-group">
                <label for="username">Name:</label>
                <input type="text" id="username" value="<?php echo $name  ?>" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" value="<?php echo $email  ?>" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="Phone">Phone:</label>
                <input type="number"  value="<?php echo $phone ?>" id="phone" name="phone" required>
            </div>
            <input type="text" name="id" value="<?php echo $id ?>" hidden>
            <button type="submit" value="Edit" name="update">Update</button>
        </form>
    </div>
</body>
</html>