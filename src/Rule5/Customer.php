<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule5;

class Customer
{
    /** @var Address */
    private $shippingAddress;

    public function __construct(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }
}
