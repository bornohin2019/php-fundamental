<?php
require "cat.php";
require "dog.php";

use userCat\Cat;
use userDog\Dog;

$catObj= new Cat();
$catObj-> pat();
echo "<br>";

$dogObj= new Dog();
$dogObj-> pat();








?>