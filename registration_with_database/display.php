<?php
    // include connection file 
    require_once 'conn.php';

    // delete query
    if(isset($_GET['deleteId'])){
        $delete = $_GET['deleteId'];

        $sql = "DELETE FROM trainee_info WHERE id = $delete";
        if(mysqli_query($conn,$sql) == TRUE){
            header('location:display.php');
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="styles/display.css">
</head>
<body>
    <div class="table-container">
        <h2>Data Table</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
            if(!$conn){
                die('Connection failed:'.mysqli_connect_error());
            }
            else{
                $display = $conn-> query("select * from trainee_info");
                while(list($id,$name,$email,$phone) = $display->fetch_row()){
                    echo " 
                        <tbody>
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td><button class='edit-btn'><a href='display.php?editId=$id'>Edit</a></button></td>
                    <td><button class='action-btn'><a href='display.php?deleteId=$id'>Delete</a></button></td>
                </tr>
            </tbody>";
                }
            }
            ?>
        
        </table>
        <button><a href="insert.php">Back to insert</a></button>
    </div><br>

</body>
</html>
