<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Number</title>
    <style>
        form {
            margin: 0 auto;
            width: 200px;
            margin-top: 50px;
            border: 2px solid;
            padding: 10px 0 20px 30px;
            border-radius: 5px;
        }

        .btn {
            margin-top: 10px;
            padding: 2px 65px;
        }

        div {
            /* margin-left: 600px; */
            text-align: center;
            margin-top: 50px;
            font-size: 20px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <form action="#" method="post">
        <h2>Enter 3 number</h2>
        <input type="number" name="num1" id="" placeholder="Enter 1st Number"><br><br>
        <input type="number" name="num2" id="" placeholder="Enter 2nd Number"><br><br>
        <input type="number" name="num3" id="" placeholder="Enter 3rd Number"><br>
        <input class="btn" type="submit" value="Submit" name="btnSubmit">
    </form>

    <?php
    if ($_POST) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        if ($num1 > $num2 && $num1 > $num3) {
            echo "<div>
             1st number $num1, 2nd number $num2, 3rd number $num3 <br> Max number is: $num1
            </div>";
        } else if ($num2 > $num1 && $num2 > $num3) {
            echo "<div> 1st number $num1, 2nd number $num2, 3rd number $num3 <br> Max number is: $num2  </div>";
        } else {
            echo " <div>1st number $num1, 2nd number $num2, 3rd number $num3 <br> Max number is: $num3  </div>";
        }
    }





    ?>
</body>

</html>