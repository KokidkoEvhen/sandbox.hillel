<?php

namespace App\HW5;

class Currency
{
    private string $isoCode;

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode()
    {
        return $this->isoCode;
    }

    private function setIsoCode($isoCode): void
    {
        $this->isoCode = $isoCode;
    }

}