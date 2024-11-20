<?php

class Bike{
    public $name ="RX";
    public $model = "100";
    public $color = "Olive";

    function bornohin (){
        return "It's Yahma";
    }

}
$myBike = new Bike();
echo $myBike -> name , "<br><br>";
echo $myBike -> model , "<br><br>";
echo $myBike -> color , "<br><br>";

?>