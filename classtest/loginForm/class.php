<?php

class Trainee{
    private $id;
    private $name;

    function __construct($userID, $userName)
    {
        $this ->id = $userID;
        $this ->name = $userName;
    }
    function combined(){
       return $this ->id.','.$this->name.PHP_EOL;
    }
    function save(){
        file_put_contents('data.txt',$this->combined(),FILE_APPEND);
    }
   static function display(){
        $myArray = file('data.txt');
        echo "Trainee ID || Trainee Name";
        foreach($myArray as $singleData){
            list($id,$name)=explode(',',$singleData);
            echo "<br> $id || $name";
        }
    }
}



?>