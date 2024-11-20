<?php

class Animal{
    public $name;
    public $sound;
    function animal($animalName, $animalSound){
        echo $this->name = $animalName. $this->sound= $animalSound;
    }
    
}
// First Object
$animalObj = new Animal();
$animalObj-> animal("Rambo ","Boke");
echo "<br> \n";

// Second Object 
$catObj = new Animal();
$catObj-> animal("Pushi ", " Mewo");



?>