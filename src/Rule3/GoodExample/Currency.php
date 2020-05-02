<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule3\GoodExample;

class Currency
{
    /** @var string */
    private $name;

    /** @var int */
    private $decimalAllowed;

    public function __construct(string $name, int $decimalAllowed)
    {
        $this->name = $name;
        $this->decimalAllowed = $decimalAllowed;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDecimalAllowed(): int
    {
        return $this->decimalAllowed;
    }
}
