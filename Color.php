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
        $averageRed = ($newColor->getRed()+$this->getRed())/2;
        $averageGreen = ($newColor->getGreen()+$this->getGreen())/2;
        $averageBlue = ($newColor->getBlue()+$this->getBlue())/2;

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

    private function setRed (int $red) {
        if (!(0 <= $red && $red <= 255)) {
            exit ('Такого цвета не существует');
        }
        $this->red = $red;
    }

    private function setGreen (int$green) {
        if (!(0 <= $green && $green <= 255)) {
            exit ('Такого цвета не существует');
        }
        $this->green = $green;
    }

    private function setBlue (int $blue) {
        if (!(0 <= $blue && $blue <= 255)) {
            exit ('Такого цвета не существует');
        }
        $this->blue = $blue;
    }

}