<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Bank extends Model
{
    /**
     * Required: yes
     * Size: 25
     *
     * @var string
     */
    protected $bankAcctNum;

    /**
     * Required: yes
     * Size: 9
     *
     * @var string
     */
    protected $bankRoutingNum;

    /**
     * https://developer.cardconnect.com/copilotapi#bank-account-type-enumeration-definition
     * "Business Checking", "General Ledger", or "Savings".
     *
     * Required: yes
     * Size: 10
     *
     * @var string
     */
    protected $bankAcctTypeCd;

    /**
     * Required: yes
     * Size: 200
     *
     * @var string
     */
    protected $bankName;

    /**
     * @return string
     */
    public function getBankAcctNum(): string
    {
        return $this->bankAcctNum;
    }

    /**
     * @param string $bankAcctNum
     */
    public function setBankAcctNum(string $bankAcctNum): void
    {
        $this->bankAcctNum = $bankAcctNum;
    }

    /**
     * @return string
     */
    public function getBankRoutingNum(): string
    {
        return $this->bankRoutingNum;
    }

    /**
     * @param string $bankRoutingNum
     */
    public function setBankRoutingNum(string $bankRoutingNum): void
    {
        $this->bankRoutingNum = $bankRoutingNum;
    }

    /**
     * @return string
     */
    public function getBankAcctTypeCd(): string
    {
        return $this->bankAcctTypeCd;
    }

    /**
     * @param string $bankAcctTypeCd
     */
    public function setBankAcctTypeCd(string $bankAcctTypeCd): void
    {
        $this->bankAcctTypeCd = $bankAcctTypeCd;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     */
    public function setBankName(string $bankName): void
    {
        $this->bankName = $bankName;
    }
}
