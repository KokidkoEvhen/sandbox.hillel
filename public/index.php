<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

//Homework 6 - test autoloaders
//require_once '../autoload.php';
//require_once '../Autoloader.php';

$color = \App\HW4\Color::randomColor();

//Homework7
//create all types of shawarma
$shawarmaOdesskaya = new \App\HW7\ShawarmaOdesskaya();
$beefShawarma = new \App\HW7\BeefShawarma();
$muttonShawarma = new \App\HW7\MuttonShawarma();

//create card and add different shawarmas
$card = new \App\HW7\ShawarmaCalculator();
$card->add($shawarmaOdesskaya);
$card->add($beefShawarma);
$card->add($muttonShawarma);