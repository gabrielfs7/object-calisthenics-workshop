<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule5;

class Order
{
    /** @var Customer */
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }
}
