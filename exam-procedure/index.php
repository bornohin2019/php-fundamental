<?php
$conn = mysqli_connect('localhost', 'root', '', 'my_shop');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $conn->query("CALL call_manufacturer('$name', '$address', '$contact')");
}
if (isset($_POST['addProduct'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];

    $conn->query("CALL call_product('$name', '$price', '$brand')");
}
if(isset($_POST['delete'])){
    $delete_id = $_POST['del'];
    $conn -> query("DELETE FROM manufacturer WHERE id = '$delete_id'");
    header("location:index.php");

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="bg-gray-100 h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md m-12">
            <h1 class="text-2xl font-semibold text-gray-800 text-center">Add Brand</h1>
            <form class="mt-6" method="post">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Name</label>
                    <input
                        type="txt"
                        id="name"
                        name="name"
                        class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Address</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Contact</label>
                    <input
                        type="text"
                        id="address"
                        name="contact"
                        class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="flex items-center justify-between">
                </div>
                <button
                    type="submit"
                    name="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg mt-6 hover:bg-blue-600 transition duration-300">
                    Submit
                </button>
            </form>
        </div>

        <!-- second table  -->

        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-semibold text-gray-800 text-center">Add Product</h1>
            <form class="mt-6" method="post">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Name</label>
                    <input
                        type="txt"
                        id="name"
                        name="name"
                        class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Price</label>
                    <input
                        type="text"
                        id="address"
                        name="price"
                        class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="mb-4">
                    <select name="brand" id="">
                        <label for=' password' class='block text-sm font-medium text-gray-600'>Brand</label>
                        <?php
                        $manufacturerList = $conn->query('SELECT * FROM manufacturer');
                        while (list($_mid, $_mname) = $manufacturerList->fetch_row()) {
                            echo "<option value='$_mid'>
                        $_mname
                    </option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="flex items-center justify-between">
                </div>
                <button
                    type="submit"
                    name="addProduct"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg mt-6 hover:bg-blue-600 transition duration-300">
                    Add product
                </button>
            </form>
        </div>
    </section>

    <!-- view table  -->

    <div class="container mx-auto m-8">
        <h1 class="text-2xl font-bold mb-4 text-center">Data table</h1>
        <table class="min-w-full border-collapse border border-gray-300 bg-white shadow-md rounded-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">SL</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Product Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Brand</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Price</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Address</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $user = $conn->query("SELECT * FROM product_view");
                $counter = 1;
                while (list($brand, $address, $contact, $productName, $price) = $user->fetch_row()) {
                    $sl = $counter++;
                    echo " <tr class='hover:bg-gray-100'>
                                        <td class='border border-gray-300 px-4 py-2'>$sl</td>
                                        <td class='border border-gray-300 px-4 py-2'>$productName</td>
                                        <td class='border border-gray-300 px-4 py-2'>$brand</td>
                                        <td class='border border-gray-300 px-4 py-2'>$price</td>
                                        <td class='border border-gray-300 px-4 py-2'>$address</td>
                                        <td class='border border-gray-300 px-4 py-2'>$contact</td>
                                 </tr>";
                }

                ?>

                <!-- Example Data Rows -->


            </tbody>
        </table>
    </div>

    <!-- delete data -->
    <section>
       <form action="" method="post">
       <div class="mb-4">
            <select name="del" id="">
                <label class='block text-sm font-medium text-gray-600'>Brand</label>
                <?php
                $manufacturerList = $conn->query('SELECT * FROM manufacturer');
                while (list($_mid, $_mname) = $manufacturerList->fetch_row()) {
                    echo "<option value='$_mid'>
                        $_mname
                    </option>";
                }
                ?>
            </select>
            <button name="delete" type="submit">Delete</button>
        </div>
       </form>
    </section>


</body>

</html>