<?php 
require_once('animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal('shaun');
echo $sheep->name;
echo $sheep->legs;
echo $sheep->cold_blooded;

echo '<br>';

$kodok = new Frog('buduk');
echo $kodok->name;
echo $kodok->legs;
echo $kodok->cold_blooded;
$kodok->jump();

echo '<br>';

$sungkong = new Ape('kera sakti');
echo $sungkong->name;
echo $sungkong->legs;
echo $sungkong->cold_blooded;
$sungkong->yell();