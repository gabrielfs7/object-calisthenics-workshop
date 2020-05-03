<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule5\GoodExample;

class ShippingFacade
{
    /** @var object */
    private $shippingService;

    public function ship(Order $order): void
    {
        $this->shippingService->ship($order->getCustomer(), $order->getShippingAddress());
    }
}
