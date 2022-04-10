<?php

namespace Hillel;

use Exception;

class Currency
{
    private string $isoCode;

    private $_allovedCodes = array('USD', 'EUR', 'UAH');

    public function __construct(string $code)
    {
        if (!in_array($code, $this->_allovedCodes)) {
            throw new Exception("Currency code not equal 'USD', 'EUR' or 'UAH'");
        }

        $this->setCode($code);
    }

    public function getCode(): string
    {
        return $this->isoCode;
    }

    private function setCode($code): void
    {
        $this->isoCode = $code;
    }

    public function equals(Currency $currency): bool
    {
        return $this == $currency;
    }
}
