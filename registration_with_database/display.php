<?php
    // include connection file 
    require_once 'conn.php';





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
                    <th>Action</th>
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
                    <td><button>Delete</button></td>
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
