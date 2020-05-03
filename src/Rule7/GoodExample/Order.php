<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule7\GoodExample;

class Order
{
    /** @var array */
    private $items;

    /** @var Customer */
    protected $customer;

    /** @var Address */
    private $shippingAddress;

    public function __construct(array $items, Customer $customer, Address $shippingAddress)
    {
        $this->customer = $customer;
        $this->items = $items;
        $this->shippingAddress = $shippingAddress;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }
}
