<?php

namespace Pokefodase\Trainer\Wallet;

final class Money
{
    public function __construct(
        public int $money
    ) {
    }

    public function add(int $amount): void
    {
        $this->money += $amount;
    }

    public function subtract(int $amount): void
    {
        if ($amount > $this->money) {
            throw new \InvalidArgumentException('Insufficient funds');
        }
        $this->money -= $amount;
    }   
}
