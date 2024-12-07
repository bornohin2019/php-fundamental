<?php
    if(isset($_POST['btnSubmit'])){
        $file = $_FILES['userFile'];
        // var_dump($file);
        $fileName=$file['name'];
        $tmpFile=$file['tmp_name'];
        $fileSize=$file['size'];

        $kb = $fileSize/1024;
        $img = 'image/';

        if($kb>400){
            echo "your File is too large..!!";
        }
        else{
            move_uploaded_file($tmpFile,$img.$fileName);
            echo "success";
        }
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="userFile" id="">
        <input type="submit" value="Upload" name="btnSubmit">
        <br><br>
    </form>
    
    <?php
    $imgLocation = "image/";
    $images = glob($imgLocation. "*{jpg,jpeg,png,gif}", GLOB_BRACE);
    if(count($images)>0){
        foreach($images as $image){
            echo "<img src='$image' width = '300px'; height = '300px'  alt='Uploaded Image'>";

        }
    }
    else{
        echo "No image Uploaded Yet";
    }



    
    ?>
</body>
</html>