<?php

namespace App\HW7;

final class MuttonShawarma extends Shawarma
{
    protected string $title = ' Шаурма из Баранины';
    protected float $coast = 85;
    protected array $ingredients = [
        'острый соус',
        'огурцы маринованные',
        'кинза',
        'помидоры свежие',
        'маринованный лук с барбарисом и зеленью',
        'мясо баранины',
        'лаваш арабский'
    ];
}
