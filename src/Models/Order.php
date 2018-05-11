<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Order extends Model
{
    /**
     * The merchantId the order is for. (cannot set this value, only used for GET)
     * Required: no
     * Size: 19
     *
     * @var int
     */
    protected $orderId;

    /**
     * The merchantId the order is for.
     * Required: yes
     * Size: 19
     *
     * @var int
     */
    protected $merchantId;

    /**
     * The equipmentId the order is for.
     * Required: yes
     * Size: 19
     *
     * @var int
     */
    protected $equipmentId;

    /**
     * Optional notes for the person fulfilling the order.
     * Required: no
     * Size: 1000
     *
     * @var int
     */
    protected $orderNotes;

    /**
     * The number of devices being ordered.
     * Required: no
     * Size: 4
     *
     * @var int
     */
    protected $quantity;

    /**
     * The price per unit.
     * Required: yes (when billToFrequencyCd is ONETIME)
     * Size: 10
     *
     * @var float
     */
    protected $unitPrice;

    /**
     * The price per month.
     * Required: yes (if billToFrequencyCd is MONTHLY)
     * Size: 4
     *
     * @var float
     */
    protected $monthlyPrice;

    /**
     * Who to bill for this order
     * https://developer.cardconnect.com/copilotapi#bill-to-enumeration-definition
     *
     * "Partner Residuals", "Partner Credit Card", "Internal" or "Customer".
     *
     * Required: yes
     * Size: 100
     *
     * @var string
     */
    protected $billToCd;

    /**
     * Billing frequency
     * https://developer.cardconnect.com/copilotapi#billing-frequency-enumeration-definition
     *
     * "One Time" or "Monthly".
     *
     * Required: yes
     * Size: 100
     *
     * @var string
     */
    protected $billingFrequencyCd;

    /**
     * The profileId of the card to charge for this order.
     * Required: yes (if billToCd is PARTNERCC)
     *
     * @var string
     */
    protected $profileId;

    /**
     * The account number to charge for this order.
     * Required: yes (if billToCd is PARTNERCC)
     *
     * @var int
     */
    protected $acctId;

    /**
     * Required: yes
     *
     * @var OrderShippingDetail
     */
    protected $shippingDetails;

    /**
     * https://developer.cardconnect.com/copilotapi#order-status-enumeration-definition
     *
     * "New", "Cancelled", "Exported", "Placed", "Fulfilling" or "Shipped"
     *
     * Required: no
     *
     * @var string
     */
    protected $orderStatusCd;

    /**
     * The date the order was placed (Usually when right after the merchant signs the application)
     * Required: no
     *
     * @var string
     */
    protected $placedDatetime;

    /**
     * The date the order was shipped
     * Required: no
     *
     * @var string
     */
    protected $shippedDatetime;

    /**
     * The date the order was canceled
     * Required: no
     *
     * @var string
     */
    protected $canceledDatetime;

    /**
     * The date the order was fulfilled
     * Required: no
     *
     * @var string
     */
    protected $fulfillingDatetime;

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getMerchantId(): int
    {
        return $this->merchantId;
    }

    /**
     * @param int $merchantId
     */
    public function setMerchantId(int $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return int
     */
    public function getEquipmentId(): int
    {
        return $this->equipmentId;
    }

    /**
     * @param int $equipmentId
     */
    public function setEquipmentId(int $equipmentId): void
    {
        $this->equipmentId = $equipmentId;
    }

    /**
     * @return int
     */
    public function getOrderNotes(): int
    {
        return $this->orderNotes;
    }

    /**
     * @param int $orderNotes
     */
    public function setOrderNotes(int $orderNotes): void
    {
        $this->orderNotes = $orderNotes;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     */
    public function setUnitPrice(float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return float
     */
    public function getMonthlyPrice(): float
    {
        return $this->monthlyPrice;
    }

    /**
     * @param float $monthlyPrice
     */
    public function setMonthlyPrice(float $monthlyPrice): void
    {
        $this->monthlyPrice = $monthlyPrice;
    }

    /**
     * @return string
     */
    public function getBillToCd(): string
    {
        return $this->billToCd;
    }

    /**
     * @param string $billToCd
     */
    public function setBillToCd(string $billToCd): void
    {
        $this->billToCd = $billToCd;
    }

    /**
     * @return string
     */
    public function getBillingFrequencyCd(): string
    {
        return $this->billingFrequencyCd;
    }

    /**
     * @param string $billingFrequencyCd
     */
    public function setBillingFrequencyCd(string $billingFrequencyCd): void
    {
        $this->billingFrequencyCd = $billingFrequencyCd;
    }

    /**
     * @return string
     */
    public function getProfileId(): string
    {
        return $this->profileId;
    }

    /**
     * @param string $profileId
     */
    public function setProfileId(string $profileId): void
    {
        $this->profileId = $profileId;
    }

    /**
     * @return int
     */
    public function getAcctId(): int
    {
        return $this->acctId;
    }

    /**
     * @param int $acctId
     */
    public function setAcctId(int $acctId): void
    {
        $this->acctId = $acctId;
    }

    /**
     * @return OrderShippingDetail
     */
    public function getShippingDetails(): OrderShippingDetail
    {
        return $this->shippingDetails;
    }

    /**
     * @param OrderShippingDetail $shippingDetails
     */
    public function setShippingDetails(OrderShippingDetail $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * @return string
     */
    public function getOrderStatusCd(): string
    {
        return $this->orderStatusCd;
    }

    /**
     * @param string $orderStatusCd
     */
    public function setOrderStatusCd(string $orderStatusCd): void
    {
        $this->orderStatusCd = $orderStatusCd;
    }

    /**
     * @return string
     */
    public function getPlacedDatetime(): string
    {
        return $this->placedDatetime;
    }

    /**
     * @param string $placedDatetime
     */
    public function setPlacedDatetime(string $placedDatetime): void
    {
        $this->placedDatetime = $placedDatetime;
    }

    /**
     * @return string
     */
    public function getShippedDatetime(): string
    {
        return $this->shippedDatetime;
    }

    /**
     * @param string $shippedDatetime
     */
    public function setShippedDatetime(string $shippedDatetime): void
    {
        $this->shippedDatetime = $shippedDatetime;
    }

    /**
     * @return string
     */
    public function getCanceledDatetime(): string
    {
        return $this->canceledDatetime;
    }

    /**
     * @param string $canceledDatetime
     */
    public function setCanceledDatetime(string $canceledDatetime): void
    {
        $this->canceledDatetime = $canceledDatetime;
    }

    /**
     * @return string
     */
    public function getFulfillingDatetime(): string
    {
        return $this->fulfillingDatetime;
    }

    /**
     * @param string $fulfillingDatetime
     */
    public function setFulfillingDatetime(string $fulfillingDatetime): void
    {
        $this->fulfillingDatetime = $fulfillingDatetime;
    }
}
