<?php
session_start();

if(!isset($_SESSION['mySession'])){
    header('location:index.php');
}

if (isset($_POST['submit'])) {
    $file = $_FILES['fileUpload'];
    // print_r($file);
    $fileName = $file['name'];
    $tmpName = $file['tmp_name'];
    $size = $file['size'];
    $kb = $size / 1024;


    $img = 'images/';
    if ($kb <= 500) {
        move_uploaded_file($tmpName, $img . $fileName);
        $msg = "Success";
    }
    else{
        $msg = "File is Too large!!";
    }
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="styles/fileUpload.css">
</head>

<body>
    <?php
    require_once('nav.php');
    ?>
    <div class="upload-container">
        <?php
        echo isset($msg) ? $msg : '';
        ?>
        <h2>Upload Your File</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label for="file-upload" class="custom-file-upload">
                    Choose File
                </label>
                <input type="file" id="file-upload" name="fileUpload" required>
            </div>
            <button type="submit" class="upload-btn" name="submit">Upload</button>
        </form>
    </div>
</body>

</html>