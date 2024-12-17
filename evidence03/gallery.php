<?php
session_start();

if(!isset($_SESSION['mySession'])){
    header('location:index.php');
}

$imgLocation = 'images/';

$images = glob($imgLocation . "*{jpg, jpeg, png, gif}", GLOB_BRACE);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles/gallery.css">
</head>

<body>

    <?php
    require_once('nav.php');
    ?>
    <div class="gallery-container">
        <h1>Image Gallery</h1>
        <div class="gallery-grid">
            
            <div class="gallery-item">

                <?php

                if (count($images) > 0) {
                    foreach ($images as $image) {
                        echo " <img src='$image' alt='Image '>";
                    }
                }
                else{
                    echo "No Image Upload Yet!";
                }
                ?>

            </div>

        </div>
    </div>
</body>

</html>