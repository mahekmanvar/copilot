<?php

namespace Guesl\CardConnect\CoPilot\Models;

class BankDetail extends Model
{
    /**
     * Required: yes
     *
     * @var Bank
     */
    protected $depositBank;

    /**
     * @var Bank
     */
    protected $withdrawalBank;

    /**
     * Required: yes
     *
     * @return Bank
     */
    public function getDepositBank(): Bank
    {
        return $this->depositBank;
    }

    /**
     * @param Bank $depositBank
     */
    public function setDepositBank(Bank $depositBank): void
    {
        $this->depositBank = $depositBank;
    }

    /**
     * @return Bank
     */
    public function getWithdrawalBank(): Bank
    {
        return $this->withdrawalBank;
    }

    /**
     * @param Bank $withdrawalBank
     */
    public function setWithdrawalBank(Bank $withdrawalBank): void
    {
        $this->withdrawalBank = $withdrawalBank;
    }
}
