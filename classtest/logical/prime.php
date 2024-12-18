<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <form action="#" method="post">
        <h2>Enter A number</h2>
        <input type="number" name="number" id=""><br>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>
    <?php
    if ($_POST) {
        $num = $_POST['number'];
        $isPrime = true;

        if ($num === 0 || $num === 1) {
            echo " 0 or 1 are not prime number.";
        } else {
            for ($i = 2; $i < $num / 2; $i++) {
                if ($num % $i === 0) {
                    $isPrime = false;
                }
            }
            if ($isPrime == true) {
                echo "$num is a Prime number. ";
            } else {
                echo " $num is Not Prime Number.";
            }
        }
    }
    ?>
</body>
</html>