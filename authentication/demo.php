<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("location:login.php");
}


// include class file

require_once 'class.php';

// data input 
if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];

    if (!preg_match("/^[a-zA-Z0-9]{4, }+@+[a-zA-Z]{2,3}[.]+[a-zA-Z]{2,3} $/", $email)) {
        echo "Email is not Valid";
    } else if (!preg_match("/^[0-9]{11,14}$/", $phone)) {
        echo "Phone is not valid";
    } else {
        // create a Object 
        $studentObject = new Student($name, $age, $gender, $email, $phone, $address, $course);
        $studentObject->save();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 0;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .form-container {
            margin: 0 auto;
            margin-top: 50px;
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    require_once 'nav.php';
    ?>
    <div class="form-container">
        <h2>Student Information Form</h2>
        <form action="#" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>

            <label for="course">Course Enrolled:</label>
            <input type="text" id="course" name="course" placeholder="Enter the course name" required>

            <button type="submit" name="btnSubmit">Submit</button>
        </form>
    </div>
</body>

</html>