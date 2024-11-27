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
        
    }
}



?>