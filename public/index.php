<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';
require_once '../src/HW5/currencies.php';

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
$usd1 = new \App\HW5\Currency('USD', $currencies);
$usd2 = new \App\HW5\Currency('UAH', $currencies);

var_dump($usd1->equals($usd2));

$x = new \App\HW5\Money(100, $usd1);
$y = new \App\HW5\Money(100, $usd2);

var_dump($x->equals($y));
