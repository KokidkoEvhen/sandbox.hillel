<?php

namespace App\HW5;
use http\Exception\InvalidArgumentException;



class Currency
{
    private string $isoCode;

    public function __construct(string $isoCode, array $currencies)
    {
        if (!in_array($isoCode, $currencies))
        {
            throw new \InvalidArgumentException('Invalid currency');
        }
        $this->setIsoCode($isoCode);
    }

    public function equals(self $currency): bool
    {
        return $this->getIsoCode() == $currency->getIsoCode();
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