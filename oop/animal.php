<?php 
class Animal{
    public $name;
    public $legs = 'legs : ' . 4 . '<br>';
    public $cold_blooded = 'cold blooded : ' . "no <br>";

    public function __construct($name){
       return $this->name = "Name : " .  $name . '<br>';
    }
}