<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule9\BadExample;

class Balance
{
    /** @var float */
    private $amount;

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }
}
