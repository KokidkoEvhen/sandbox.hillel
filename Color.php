<?php

use JetBrains\PhpStorm\Pure;

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

    public function equals(Color $color): bool {
        if ($this->getRed() == $color->getRed() && $this->getGreen() == $color->getGreen() && $this->getBlue() == $color->getBlue()){
            return true;
        }else{
            return false;
        }
    }

    public function mix(Color $newColor): Color
    {
        $averageRed = round(($newColor->getRed()+$this->getRed())/2, 0);
        $averageGreen = round(($newColor->getGreen()+$this->getGreen())/2, 0);
        $averageBlue = round(($newColor->getBlue()+$this->getBlue())/2,0);

        return new Color($averageRed, $averageGreen, $averageBlue);
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
        if (!(0 <= $color && $color <= 255)) {
            exit('Такого цвета не существует');
        }
    }

}