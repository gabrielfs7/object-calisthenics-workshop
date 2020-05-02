<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule3\GoodExample;

use Exception;

class AccountFacade
{
    /** @var object */
    private $balanceService;

    public function deposit(Money $amount, int $accountId): void
    {
        return $this->balanceService->addBalance($accountId, $amount);
    }

    public function withdraw(Money $amount, int $accountId): void
    {
        $currentBalance = $this->checkBalance($accountId);

        if ($currentBalance->isGreaterThan($amount)) {
            throw new Exception('Deposit amount must be higher than 0');
        }

        return $this->balanceService->substractBalance($accountId, $amount);
    }

    public function checkBalance(int $accountId): Money
    {
        return $this->balanceService->getBalance($accountId);
    }
}
