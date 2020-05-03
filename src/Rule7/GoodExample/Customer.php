<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule7\GoodExample;

class Customer
{
    /** @var int */
    private $internalId;

    /** @var Name */
    private $name;

    public function __construct(int $internalId, Name $name)
    {
        $this->internalId = $internalId;
        $this->name = $name;
    }

    public function getInternalId(): int
    {
        return $this->internalId;
    }

    public function getName(): Name
    {
        return $this->name;
    }
}
