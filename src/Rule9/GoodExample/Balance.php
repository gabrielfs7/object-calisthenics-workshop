<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule9\GoodExample;

class Balance
{
    /** @var float */
    private $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function subtractAmount(float $amount): void
    {
        if ($this->amount < $amount) {
            throw new Exception('Balance cannot be negative');
        }

        $this->amount += $amount;
    }
}
