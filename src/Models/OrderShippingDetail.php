<?php

namespace Guesl\CardConnect\CoPilot\Models;

class OrderShippingDetail extends Model
{
    /**
     * Required: yes
     *
     * @var Address
     */
    protected $shippingAddress;

    /**
     * Name of the person receiving the order.
     * Required: yes
     * Size: 100
     *
     * @var string
     */
    protected $shipToAttn;

    /**
     * Email of the person receiving the order.
     * Required: yes
     * Size: 100
     *
     * @var string
     */
    protected $shipToAttnEmail;

    /**
     * The shipping method to be used.
     * https://developer.cardconnect.com/copilotapi#shipping-method-enumeration-definition
     *
     * "STANDARD" or "EXPEDITED".
     *
     * Required: yes
     * Size: 100
     *
     * @var string
     */
    protected $shippingMethodCd;

    /**
     * Who to bill for the shipping (only set if shippingMethodCd is EXPEDITED)
     * https://developer.cardconnect.com/copilotapi#bill-to-enumeration-definition
     *
     * Required: yes (if shippingMethodCd is EXPEDITED)
     * "Partner Residuals"", "Partner Credit Car", "Internal" or "Customer".
     *
     * Size: 100
     *
     * @var string
     */
    protected $shippingBillToCd;

    /**
     * The shipping carrier
     * https://developer.cardconnect.com/copilotapi#shipping-carrier-enumeration-definition
     *
     * "FedEx" or "UPS.
     *
     * Required: no
     * Size: 100
     *
     * @var string
     */
    protected $shippingCarrierCd;

    /**
     * The shipping carrier tracking number.
     * Required: no
     * Size: 100
     *
     * @var string
     */
    protected $trackingNumber;

    /**
     * The shipping cost(Decimal formation).
     * Required: no
     * Size: 100
     *
     * @var float
     */
    protected $shippingCost;

    /**
     * ###-###-####
     * Required: yes
     * Size: 12
     *
     * @var string
     */
    protected $merchantContactPhone;

    /**
     * #####
     * Required: no
     * Size: 5
     *
     * @var string
     */
    protected $merchantContactPhoneExt;

    /**
     * Purchase order number
     * Required: no
     * Size: 30
     *
     * @var string
     */
    protected $poNumber;

    /**
     * @return Address
     */
    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     */
    public function setShippingAddress(Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return string
     */
    public function getShipToAttn(): string
    {
        return $this->shipToAttn;
    }

    /**
     * @param string $shipToAttn
     */
    public function setShipToAttn(string $shipToAttn): void
    {
        $this->shipToAttn = $shipToAttn;
    }

    /**
     * @return string
     */
    public function getShipToAttnEmail(): string
    {
        return $this->shipToAttnEmail;
    }

    /**
     * @param string $shipToAttnEmail
     */
    public function setShipToAttnEmail(string $shipToAttnEmail): void
    {
        $this->shipToAttnEmail = $shipToAttnEmail;
    }

    /**
     * @return string
     */
    public function getShippingMethodCd(): string
    {
        return $this->shippingMethodCd;
    }

    /**
     * @param string $shippingMethodCd
     */
    public function setShippingMethodCd(string $shippingMethodCd): void
    {
        $this->shippingMethodCd = $shippingMethodCd;
    }

    /**
     * @return string
     */
    public function getShippingBillToCd(): string
    {
        return $this->shippingBillToCd;
    }

    /**
     * @param string $shippingBillToCd
     */
    public function setShippingBillToCd(string $shippingBillToCd): void
    {
        $this->shippingBillToCd = $shippingBillToCd;
    }

    /**
     * @return string
     */
    public function getShippingCarrierCd(): string
    {
        return $this->shippingCarrierCd;
    }

    /**
     * @param string $shippingCarrierCd
     */
    public function setShippingCarrierCd(string $shippingCarrierCd): void
    {
        $this->shippingCarrierCd = $shippingCarrierCd;
    }

    /**
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber(string $trackingNumber): void
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     */
    public function setShippingCost(float $shippingCost): void
    {
        $this->shippingCost = $shippingCost;
    }

    /**
     * @return string
     */
    public function getMerchantContactPhone(): string
    {
        return $this->merchantContactPhone;
    }

    /**
     * @param string $merchantContactPhone
     */
    public function setMerchantContactPhone(string $merchantContactPhone): void
    {
        $this->merchantContactPhone = $merchantContactPhone;
    }

    /**
     * @return string
     */
    public function getMerchantContactPhoneExt(): string
    {
        return $this->merchantContactPhoneExt;
    }

    /**
     * @param string $merchantContactPhoneExt
     */
    public function setMerchantContactPhoneExt(string $merchantContactPhoneExt): void
    {
        $this->merchantContactPhoneExt = $merchantContactPhoneExt;
    }

    /**
     * @return string
     */
    public function getPoNumber(): string
    {
        return $this->poNumber;
    }

    /**
     * @param string $poNumber
     */
    public function setPoNumber(string $poNumber): void
    {
        $this->poNumber = $poNumber;
    }
}
