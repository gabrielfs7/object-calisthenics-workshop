<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule7\BadExample;

class Order
{
    /** @var array */
    private $items;

    /** @var int */
    private $customerId;

    /** @var string */
    private $customerFirstName;

    /** @var string */
    private $customerLastName;

    /** @var string */
    private $shippingStreet;

    /** @var string */
    private $shippingCountry;

    /** @var string */
    private $shippingPostalCode;

    public function __construct(
        array $items,
        int $customerId,
        string $customerFirstName,
        string $customerLastName,
        string $shippingStreet,
        string $shippingCountry,
        string $shippingPostalCode
    )
    {
        $this->items = $items;
        $this->customerId = $customerId;
        $this->customerFirstName = $customerFirstName;
        $this->customerLastName = $customerLastName;
        $this->shippingStreet = $shippingStreet;
        $this->shippingCountry = $shippingCountry;
        $this->shippingPostalCode = $shippingPostalCode;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    public function getCustomerFirstName(): string
    {
        return $this->customerFirstName;
    }

    public function getCustomerLastName(): string
    {
        return $this->customerLastName;
    }

    public function getShippingStreet(): string
    {
        return $this->shippingStreet;
    }

    public function getShippingCountry(): string
    {
        return $this->shippingCountry;
    }

    public function getShippingPostalCode(): string
    {
        return $this->shippingPostalCode;
    }
}
