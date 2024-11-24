<?php
require_once "myClass.php";

if(isset($_POST['btnSubmit'])){
    $id = $_POST['trainID'];
    $name = $_POST['trainName'];
    // echo "$id, $name";

    // create a object 
    $traineeObject = new Trainee($id, $name);
    $traineeObject->save();
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Form</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="id">TrainID</label><br>
            <input type="number" name="trainID" id=""><br>
        </div>
        <div>
            <label for="id">TrainName</label><br>
            <input type="text" name="trainName" id=""><br>
        </div>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>

    <?php
        Trainee::display();
    ?>
</body>
</html>