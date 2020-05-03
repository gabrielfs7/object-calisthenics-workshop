<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule9\BadExample;

use Exception;

class AccountFacade
{
    /** @var object */
    private $balanceService;

    public function withdraw(float $amount, int $accountId): void
    {
        /** @var Balance $balance */
        $balance = $this->balanceService->getBalance($accountId);

        if ($balance->getAmount() < $amount) {
            throw new Exception('Deposit amount must be higher than 0');
        }

        $balance->setAmount($balance->getAmount() + $amount);

        return $this->balanceService->updateBalance($accountId, $balance);
    }
}
