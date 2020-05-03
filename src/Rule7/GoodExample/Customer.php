<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule7\GoodExample;

class Customer
{
    /** @var int */
    private $id;

    /** @var Name */
    private $name;

    public function __construct(int $id, Name $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): Name
    {
        return $this->name;
    }
}
