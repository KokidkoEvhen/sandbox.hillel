<?php

namespace App\HW5;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(float|int $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function equals(Money $money): bool
    {
        return $this->getAmount() == $money->getAmount()
            && $this->getCurrency()->getIsoCode() == $money->getCurrency()->getIsoCode();
    }

    public function add(Money $money)
    {
        if (!($this->getCurrency()->getIsoCode() == $money->getCurrency()->getIsoCode()))
        {
            throw new \InvalidArgumentException('Invalid currency');
        }
        $this->setAmount($this->getAmount() + $money->getAmount());
    }

    public function getAmount(): float|int
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    private function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }

    private function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }



}