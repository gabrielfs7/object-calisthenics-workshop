<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule7\GoodExample;

class Address
{
    /** @var string */
    private $street;

    /** @var string */
    private $country;

    /** @var string */
    private $postalCode;

    public function __construct(
        string $street,
        string $country,
        string $postalCode
    )
    {
        $this->street = $street;
        $this->country = $country;
        $this->postalCode = $postalCode;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
}
