<?php
class Student{
    private $name;
    private $email;
    private $phone;
    private $address;
    private $course;

    function __construct($userName,$userEmail,$userPhone,$userAddress,$userCourse)
    {
        $this->name =$userName;
        $this->email=$userEmail;
        $this->phone=$userPhone;
        $this->address=$userAddress;
        $this->course=$userCourse;
    }
    function combine(){
        return $this->name.','.$this->email.','.$this->phone.','.$this->address.','.$this->course.PHP_EOL;
    }
    function save(){
        file_put_contents('store.txt',$this->combine(),FILE_APPEND);
    }
    static function display(){
        $allData=file('store.txt');
        echo "
        <table style='margin: 0 auto; padding-bottom: 10; font-size: 1.25rem; border-collapse: collapse;'>
            <thead>
                <tr>
                    <th style='border: 1px solid black; padding: 8px;'>Name</th>
                    <th style='border: 1px solid black; padding: 8px;'>Email</th>
                    <th style='border: 1px solid black; padding: 8px;'>Phone</th>
                    <th style='border: 1px solid black; padding: 8px;'>Address</th>
                    <th style='border: 1px solid black; padding: 8px;'>Course</th>
                </tr>
            </thead>
            <tbody>";
            foreach($allData as $singleData){
                list($userName,$userEmail,$userPhone,$userAddress,$userCourse)=explode(',',trim($singleData));

                echo "
            <tr>
                <td style='border: 1px solid black; padding: 8px;'>$userName</td>
                <td style='border: 1px solid black; padding: 8px;'>$userEmail</td>
                <td style='border: 1px solid black; padding: 8px;'>$userPhone</td>
                <td style='border: 1px solid black; padding: 8px;'>$userAddress</td>
                <td style='border: 1px solid black; padding: 8px;'>$$userCourse</td>
            </tr>";
                
            }
            echo "
            </tbody>
        </table>";

    }

}

?>