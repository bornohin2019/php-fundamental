<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_add');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $conn->query("call call_brand('$name', '$contact')");
}
if (isset($_POST['add'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];

    $conn->query("call call_product('$pname', '$price', '$brand')");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure table relation</title>
    <link rel="stylesheet" href="styles/>
</head>

<body>
    <div class="login-container">
        <h2>Add Brand</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Brand:</label>
                <input type="text" id="username" name="name" required>
            </div>
            <div class="input-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <button type="submit" name="submit">Insert</button>
        </form>
    </div>

    <!-- add product section -->

    <div class="login-container">
        <h2>Add Brand</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Product Name:</label>
                <input type="text" id="username" name="pname" required>
            </div>
            <div class="input-group">
                <label for="price">price:</label>
                <input type="text" id="price" name="price" required>
            </div>
            <div class="input-group">
                <label for="price">Brand</label>
                <select name="brand" id="">
                    <?php
                    $brandList = $conn->query('SELECT * FROM brand');
                    while (list($id, $name) = $brandList->fetch_row()) {
                        echo "<option value='$id'>$name</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="add">Add Product</button>
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
                    $user = $conn->query("SELECT * FROM product_view");
                    $counter= 1;
                    while(list($brand, $contact, $product_name, $price) = $user-> fetch_row()){
                        $sl = $counter++;
                        echo " <tr>
                    <td>$sl</td>
                    <td>$brand</td>
                    <td>$contact</td>
                    <td>$product_name</td>
                    <td>$price</td>
                </tr> ";
                    }
                    
                    ?>
               

            </tbody>
        </table>
    </div>
</body>

</html>