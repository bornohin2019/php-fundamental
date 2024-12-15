<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_data');
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $conn->query("call call_brand('$name','$contact')");
}
if (isset($_POST['addProduct'])) {
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $brand = $_POST['select_brand'];

    $conn->query("call call_product('$name', '$price', '$brand')");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="login-container">
        <h2>Brand Add</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="name">name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="contact">contact:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <button type="submit" name="insert">Insert</button>
        </form>
    </div>
    <br>
    <div class="login-container">
        <h2>Product Add</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="name">Product name:</label>
                <input type="text" id="name" name="pname" required>
            </div>
            <div class="input-group">
                <label for="contact">Price</label>
                <input type="text" id="contact" name="price" required>
            </div>
            <div class="input-group">
                <label for="contact">Brand</label>
                <select name="select_brand" id="">

                    <?php
                    $brandList = $conn->query("SELECT * FROM brand");
                    while (list($id, $name) = $brandList->fetch_row()) {
                        echo "<option value='$id'>$name</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="addProduct">Insert</button>
        </form>
    </div>

    <!-- data view  -->

    <div class="table-container">
        <h2>Data Table</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Brand</th>
                    <th>Contact</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'product_data');
                if (!$conn) {
                    die('Connection fail:' . mysqli_connect_error());
                } else {
                    $user = $conn->query("SELECT * FROM product_view");
                    $counter = 1;
                    while (list($brand, $contact, $product_name, $price) = $user->fetch_row()) {
                        $sl = $counter++;
                        echo "<td>$sl</td>
                <td>$brand</td>
                <td>$contact</td>
                <td>$product_name</td>
                <td>$price</td>
                </tr>";
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>