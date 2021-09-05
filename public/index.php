<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

//Homework 4
$color = new \App\HW4\Color(200, 200, 200);
$mixedColor = $color->mix(new \App\HW4\Color(100, 100, 100));
$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150

if (!$color->equals($mixedColor)) {
    echo 'Цвета не равны';
} else {
    echo 'Цвета равны';
}
$randomColor = \App\HW4\Color::randomColor();
var_dump($randomColor);

//Homework 5

