<?php
use Strawberry as Strawberry;

require 'class_fruit(2.1).php';

class Strawberry extends Fruit{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}

$set_strawberry = new Strawberry("Strawberry", "red");
$set_strawberry->message();
$set_strawberry->intro();

?>