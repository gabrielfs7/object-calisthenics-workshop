<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule3\BadExample;

use Exception;

class AccountFacade
{
    /** @var object */
    private $balanceService;

    public function deposit(float $amount, int $accountId): void
    {
        if ($amount <= 0) {
            throw new Exception('Deposit amount must be higher than 0');
        }

        if (strlen(explode('.', $amount)[1] ?? '') > 2) {
            throw new Exception('The amount must have max 2 decimal digits');
        }

        return $this->balanceService->addBalance($accountId, $amount);
    }

    public function withdraw(float $amount, int $accountId): void
    {
        if ($amount <= 0) {
            throw new Exception('Deposit amount must be higher than 0');
        }

        if (strlen(explode('.', $amount)[1] ?? '') > 2) {
            throw new Exception('The amount must have max 2 decimal digits');
        }

        if ($this->checkBalance($accountId) < $amount) {
            throw new Exception('Deposit amount must be higher than 0');
        }

        return $this->balanceService->substractBalance($accountId, $amount);
    }

    public function checkBalance(int $accountId): float
    {
        return $this->balanceService->getBalance($accountId);
    }
}
