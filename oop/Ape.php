<?php 
require_once('animal.php');

class Ape extends Animal{
    public $legs = 'legs : ' . 2 . '<br>';
    public function yell(){
        echo 'Yell : Auooo';
    }
}

?>