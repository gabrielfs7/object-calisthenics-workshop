<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule2\BadExample;

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
            $this->processOrder($orderId);
        }
    }

    private function processOrder(int $orderId): void
    {
        $order = $this->getOrderById($orderId);

        foreach ($order->getItems() as $item) {
            $this->processItem($item);
        }

        $this->shippingService->ship($order);
    }

    private function processItem(object $item): void
    {
        if (!$this->stockService->hasStock($item)) {
            throw new Exception('Insufficient Stock');
        } else {
            $this->stockService->decreaseStock($item);
        }
    }

    private function getOrderById(int $orderId): object
    {
        $order = $this->orderRepository->find($orderId);

        if ($order) {
            return $order;
        } else {
            throw new Exception('Order does not exist');
        }
    }
}
