<?php

require_once('Color.php');

$color = new Color(200, 200, 200);
$mixedColor = $color->mix(new Color(100, 100, 100));
$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150

if (!$color->equals($mixedColor)) {
    echo 'Цвета не равны';
}else{
    echo 'Цвета равны';
}
$randomColor = Color::randomColor();
var_dump($randomColor);
