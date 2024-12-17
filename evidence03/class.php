<?php
class Student
{
    private $name;
    private $email;
    private $phone;
    private $address;
    function __construct($userName, $userEmail, $userPhone, $userAddress)
    {
        $this->name = $userName;
        $this->email = $userEmail;
        $this->phone = $userPhone;
        $this->address = $userAddress;
    }
    function combine()
    {
        return $this->name . ',' . $this->email . ',' . $this->phone . ',' . $this->address . PHP_EOL;
    }
    function save()
    {
        file_put_contents('store.txt', $this->combine(), FILE_APPEND);
    }
    static function display()
    {
        $myArray = file('store.txt');
        echo "<table class='data-table'>
           <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>";

        foreach ($myArray as $singleData) {
            list($name, $email, $phone, $address) = explode(',', trim($singleData));
            echo "   <tbody>
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$address</td>
                </tr>
            </tbody>
            </table>";
        }
    }
}
?>
