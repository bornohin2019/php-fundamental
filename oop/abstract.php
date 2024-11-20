<?php

abstract class Animal{
    abstract public function info();
    public function live(){
        echo "It is live in Our Village.";
    }
}

class Dog extends Animal{
    function info(){
        echo "Dog is a danger Animal.";
    }
}
class Cat extends Animal{
    function info(){
        echo "Cat is a Cute Animal.";
    }
}

$dogObj = new Dog();
$dogObj-> info();
echo "<br>";
$dogObj-> live();
echo "<br> <br>";

// second object 
$catObj = new Cat();
$catObj-> info();
echo "<br>";
$catObj-> live();


?>