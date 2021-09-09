<?php

namespace App\HW7;

abstract class Shawarma
{
    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->coast;
    }

    /**
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
