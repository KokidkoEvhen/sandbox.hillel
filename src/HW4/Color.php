<?php

namespace App\HW4;

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    function __construct(int $red, int $green, int $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function equals(Color $color): bool
    {
        return $this->getRed() == $color->getRed()
            && $this->getGreen() == $color->getGreen()
            && $this->getBlue() == $color->getBlue();

    }

    public function mix(Color $newColor): Color
    {
        return new Color(
            intdiv($newColor->getRed() + $this->getRed(), 2),
            intdiv($newColor->getGreen() + $this->getGreen(), 2),
            intdiv($newColor->getBlue()+$this->getBlue(), 2));
    }

    public static function randomColor(): self
    {
        return new self(rand(0, 255), rand(0, 255), rand(0, 255));
    }

    public function getRed (): int
    {
        return $this->red;
    }

    public function getGreen (): int
    {
        return $this->green;
    }

    public function getBlue (): int
    {
        return $this->blue;
    }

    private function setRed (int $red): void
    {
        $this->checkColorExist($red);
        $this->red = $red;
    }

    private function setGreen (int $green): void
    {
        $this->checkColorExist($green);
        $this->green = $green;
    }

    private function setBlue (int $blue): void
    {
        $this->checkColorExist($blue);
        $this->blue = $blue;
    }

    private function checkColorExist ($color): void
    {
        if ($color < 0 || $color > 255) {
            exit('Такого цвета не существует');
        }
    }

}