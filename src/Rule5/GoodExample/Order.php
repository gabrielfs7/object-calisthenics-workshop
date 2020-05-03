<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule5\GoodExample;

use Gsoares\ObjectCalisthenics\Rule5\Address;

class Order extends \Gsoares\ObjectCalisthenics\Rule5\Order
{
    public function getShippingAddress(): Address
    {
        return $this->customer->getShippingAddress();
    }
}
