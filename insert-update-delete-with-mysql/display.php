<?php
// include connection file 
require_once 'connection.php';

// delete query 
if(isset($_GET['deleteId'])){
    $delete = $_GET['deleteId'];

    $sql = "DELETE FROM employee_info WHERE id = $delete";
    if(mysqli_query($connection, $sql) == TRUE){
        header('location:display.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive Data Table</title>
    <link rel="stylesheet" href="styles/display.css">
</head>

<body>

    <div class="table-container">
        <div class="table-title">Employee Data Table</div>
        <table>
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
            if (!$connection) {
                die('Connection Failed' . mysqli_connect_errno());
            } else {
                $display = $connection->query("SELECT * FROM employee_info");
                while (list($id, $name, $email, $phone) =
                    $display->fetch_row()
                ) {
                    echo "
                        <tbody>
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td><button style='color: #fff; background: #f4d03f; border: none; border-radius: 5px; padding: 5px 10px; cursor: pointer;'><a href='edit.php?editId=$id'>Edit</a></button></td>
                    <td><button style='color: #fff; background: #f4d03f; border: none; border-radius: 5px; padding: 5px 10px; cursor: pointer;' ><a href='display.php?deleteId=$id'>Delete</a></button></td>
                </tr>
               
            </tbody>";
                }
            }
            ?>
        </table>
        

        <div class="footer">© 2024 EliteCorp. All Rights Reserved.</div><br>
        <button><a href="insert.php">Back to Insert</a></button>

    </div>
</body>

</html>