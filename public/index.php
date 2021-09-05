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

//Create two different currencies
$usd = new \App\HW5\Currency('USD', $currencies);
$uah = new \App\HW5\Currency('UAH', $currencies);
var_dump($usd->equals($uah));

//Create two different wallets to compare
$myMoney = new \App\HW5\Money(100, $usd);
$YourMoney = new \App\HW5\Money(100, $uah);
var_dump($myMoney->equals($YourMoney));

//Create another wallet to add
$noOnesMoney = new \App\HW5\Money(50, $usd);
$myMoney->add($noOnesMoney);
var_dump($myMoney);