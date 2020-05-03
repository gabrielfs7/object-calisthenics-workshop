<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule9\GoodExample;

class AccountFacade
{
    /** @var object */
    private $balanceService;

    public function withdraw(float $amount, int $accountId): void
    {
        /** @var Balance $balance */
        $balance = $this->balanceService->getBalance($accountId);
        $balance->subtractAmount($amount);

        return $this->balanceService->updateBalance($accountId, $balance);
    }
}
