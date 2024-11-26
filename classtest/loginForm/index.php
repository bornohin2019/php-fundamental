<?php
require_once('class.php');

if(isset($_POST['btnSubmit'])){
    $id= $_POST['traineeID'];
    $name= $_POST['traineeName'];

    $trainObj= new Trainee($id,$name);
    $trainObj->save();
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">Trainee ID</label>
            <input type="number" name="traineeID" id="">
        </div>
        <div>
            <label for="">Trainee Name</label>
            <input type="text" name="traineeName" id="">
        </div>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>
    <?php
    Trainee::display();
    ?>
</body>
</html>