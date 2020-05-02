<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule3\GoodExample;

use Exception;

class Money
{
    /** @var Currency */
    private $currency;

    /** @var int */
    private $wholeNumber;

    /** @var int */
    private $decimal;

    public function __construct(Currency $currency, int $wholeNumber, int $decimal)
    {
        if ($wholeNumber <= 0) {
            throw new Exception('Deposit amount must be higher than 0');
        }

        if ($decimal < 0 || $decimal > $currency->getDecimalAllowed()) {
            throw new Exception('Decimal must be between 0 and ' . $currency->getDecimalAllowed());
        }

        $this->currency = $currency;
        $this->wholeNumber = $wholeNumber;
        $this->decimal = $decimal;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function getAmount(): float
    {
        return (float)($this->wholeNumber . '.' . $this->decimal);
    }

    public function isGreaterThan(Money $money): bool
    {
        return $this->getAmount() > $money->getAmount();
    }
}
