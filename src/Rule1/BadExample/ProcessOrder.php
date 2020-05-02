<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule1\BadExample;

use Exception;

class ProcessOrder
{
    /** @var object */
    private $orderRepository;

    /** @var object */
    private $stockService;

    /** @var object */
    private $shippingService;

    public function process(array $orderIds): void
    {
        foreach ($orderIds as $orderId) {
            $order = $this->orderRepository->find($orderId);

            if (!$order) {
                throw new Exception('Order does not exist');
            }

            foreach ($order->getItems() as $item) {
                if (!$this->stockService->hasStock($item)) {
                    throw new Exception('Insufficient Stock');
                }

                $this->stockService->decreaseStock($item);
            }

            $this->shippingService->ship($order);
        }
    }
}
