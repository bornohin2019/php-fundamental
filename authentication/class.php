<?php
class Student{
    private $name;
    private $age;
    private $gender;
    private $email;
    private $phone;
    private $address;
    private $course;

    function __construct($userName,$userAge,$userGender,$userEmail,$userPhone,$userAddress,$userCourse)      
    {
        $this->name= $userName;
        $this->age= $userAge;
        $this->gender= $userGender;
        $this->email= $userEmail;
        $this->phone= $userPhone;
        $this->address= $userAddress;
        $this->course= $userCourse;
    }
    function combine(){
        return $this->name. ",".$this->age. ",".$this->gender. ",".$this->email. ",".$this->phone. ",".$this->address. ",".$this->course. ",".PHP_EOL;
    }
    function save(){
        file_put_contents('store.txt', $this->combine(),FILE_APPEND);
    }
    static function display(){
        $myArray = file('store.txt');
        echo "
        <table style='margin: 0 auto; padding-bottom: 10; font-size: 1.25rem; border-collapse: collapse;'>
            <thead>
                <tr>
                    <th style='border: 1px solid black; padding: 8px;'>Name</th>
                    <th style='border: 1px solid black; padding: 8px;'>Age</th>
                    <th style='border: 1px solid black; padding: 8px;'>Gender</th>
                    <th style='border: 1px solid black; padding: 8px;'>Email</th>
                    <th style='border: 1px solid black; padding: 8px;'>Phone</th>
                    <th style='border: 1px solid black; padding: 8px;'>Address</th>
                    <th style='border: 1px solid black; padding: 8px;'>Course</th>
                </tr>
            </thead>
            <tbody>";
            foreach ($myArray as $process) {
            list($name, $age, $gender, $email,$phone,$address,$course) = explode(",", trim($process));
            echo "
            <tr>
                <td style='border: 1px solid black; padding: 8px;'>$name</td>
                <td style='border: 1px solid black; padding: 8px;'>$age</td>
                <td style='border: 1px solid black; padding: 8px;'>$gender</td>
                <td style='border: 1px solid black; padding: 8px;'>$email</td>
                <td style='border: 1px solid black; padding: 8px;'>$phone</td>
                <td style='border: 1px solid black; padding: 8px;'>$address</td>
                <td style='border: 1px solid black; padding: 8px;'>$course</td>
            </tr>";
        }
        echo "
            </tbody>
        </table>";

    }
}



?>