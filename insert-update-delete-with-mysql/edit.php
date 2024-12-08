<?php
// include connection file 
require_once 'connection.php';

if (isset($_GET['editId'])){
    $editId = $_GET['editId'];

    $sql = "SELECT * FROM employee_info WHERE id = $editId";
    $query = mysqli_query($connection, $sql);
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

    $sql = "UPDATE employee_info SET name = '$name', email = '$email', phone = '$phone' WHERE id = $id";

    if(mysqli_query($connection, $sql) == TRUE){
        header('location:display.php');
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
    <title>Insert Data</title>
    <link rel="stylesheet" href="styles/insert.css">

</head>

<body>
    <div class="signup-container">
        <h1>Update Information</h1>
        <p></p>
        <form action="#" method="post">
        <input type="text" name="id" value="<?php echo $id ?>" hidden>
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Enter your name" required>
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?php echo $email ?>" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="phone" id="phone" name="phone" value="<?php echo $phone ?>" placeholder="Enter Your number" required>
            </div>
            <button type="submit" class="signup-button" name="update">Update</button>
        </form>
        <!-- <p class="disclaimer">Your privacy is our priority. We never share your details with anyone.</p> -->
    </div>
</body>

</html>