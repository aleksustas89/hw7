<?php

namespace Hillel;

class Money
{

    public int|float $amount;

    private Currency $currency;

    public function __construct(int|float $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    private function setAmount(int|float $amount): void
    {
        if($amount <= 0){
            throw new \Exception("Invalid amount");
        }

        $this->amount = $amount;
    }

    private function setCurrency($currency): void
    {
        $this->currency = $currency;
    }

    public function getAmount():int|float
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function equals(Money $money): bool
    {
        return $this == $money;
    }

    public function add(Money $money): Money
    {
        if($this->currency == $money->currency){
            return new Money($this->getAmount() + $money->getAmount(), $this->currency);
        }

        throw new \Exception("Currencies are not equal");
    }
}
