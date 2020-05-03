<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule5\BadExample;

use Gsoares\ObjectCalisthenics\Rule5\Order;

class ShippingFacade
{
    /** @var object */
    private $shippingService;

    public function ship(Order $order): void
    {
        $address = $order->getCustomer()->getShippingAddress();

        $this->shippingService->ship($order->getCustomer(), $address);
    }
}
