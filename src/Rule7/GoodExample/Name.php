<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule7\GoodExample;

class Name
{
    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}
