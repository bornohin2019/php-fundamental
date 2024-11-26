<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        div{
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
        <h2>Enter A number</h2>
        <input type="number" name="number" id=""><br>
        <input class="btn" type="submit" value="Submit" name="submit">
    </form>


    <?php
    if ($_POST) {
        $num = $_POST['number'];
        $fact = 1;
        if ($num < 0) {
            echo "Factorial is not define for negative number.";
        } else {
            for ($i = 2; $i <= $num; $i++) {
                $fact = $fact * $i;
            }
            echo " 
                    <div>
                        $num Factorial is : $fact
                    </div>
                ";
        }
    }

    ?>
</body>

</html>