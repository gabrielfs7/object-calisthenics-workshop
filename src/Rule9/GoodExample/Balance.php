<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule9\GoodExample;

use Exception;

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
            throw new Exception('Not enough balance');
        }

        $this->amount += $amount;
    }
}
