<?php

namespace Guesl\CardConnect\CoPilot\Models;

class BusinessDetails extends Model
{
    /**
     * Required: no
     *
     * @var boolean
     */
    protected $customerBillPriorToShipFlg;

    /**
     * Required: no
     *
     * @var boolean
     */
    protected $depositReqForFulfillFlg;

    /**
     * https://developer.cardconnect.com/copilotapi#when-customer-charged-enumeration-definition
     *
     * "In Advance" or "When Service Provided".
     *
     * Required: no
     * Size: 10
     *
     * @var string
     */
    protected $whenCustomerChargedCd;

    /**
     * https://developer.cardconnect.com/copilotapi#refund-policy-enumeration-definition
     *
     * "Exchange Only", "No Refund or Exchange", "More than 30 days" or "30 Days or Less".
     *
     * Required: no
     * Size: 10
     *
     * @var string
     */
    protected $refundPolicyCd;

    /**
     * https://developer.cardconnect.com/copilotapi#service-provided-in-enumeration-definition
     *
     * "30 Days or Less", "31 to 60 Days" or "60+ Days".
     *
     * Required: no
     * Size: 10
     *
     * @var string
     */
    protected $serviceProvidedInCd;

    /**
     * @return bool
     */
    public function isCustomerBillPriorToShipFlg(): bool
    {
        return $this->customerBillPriorToShipFlg;
    }

    /**
     * @param bool $customerBillPriorToShipFlg
     */
    public function setCustomerBillPriorToShipFlg(bool $customerBillPriorToShipFlg): void
    {
        $this->customerBillPriorToShipFlg = $customerBillPriorToShipFlg;
    }

    /**
     * @return bool
     */
    public function isDepositReqForFulfillFlg(): bool
    {
        return $this->depositReqForFulfillFlg;
    }

    /**
     * @param bool $depositReqForFulfillFlg
     */
    public function setDepositReqForFulfillFlg(bool $depositReqForFulfillFlg): void
    {
        $this->depositReqForFulfillFlg = $depositReqForFulfillFlg;
    }

    /**
     * @return string
     */
    public function getWhenCustomerChargedCd(): string
    {
        return $this->whenCustomerChargedCd;
    }

    /**
     * @param string $whenCustomerChargedCd
     */
    public function setWhenCustomerChargedCd(string $whenCustomerChargedCd): void
    {
        $this->whenCustomerChargedCd = $whenCustomerChargedCd;
    }

    /**
     * @return string
     */
    public function getRefundPolicyCd(): string
    {
        return $this->refundPolicyCd;
    }

    /**
     * @param string $refundPolicyCd
     */
    public function setRefundPolicyCd(string $refundPolicyCd): void
    {
        $this->refundPolicyCd = $refundPolicyCd;
    }

    /**
     * @return string
     */
    public function getServiceProvidedInCd(): string
    {
        return $this->serviceProvidedInCd;
    }

    /**
     * @param string $serviceProvidedInCd
     */
    public function setServiceProvidedInCd(string $serviceProvidedInCd): void
    {
        $this->serviceProvidedInCd = $serviceProvidedInCd;
    }
}
