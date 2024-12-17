<?php
require 'class.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="styles/dataTable.css">
</head>

<body>
    <?php
        require 'nav.php';
    ?>
    <div class="table-container">
        <h2>Data Table</h2>

        <?php

    

        Student::display();
        ?>


    </div>
</body>

</html>