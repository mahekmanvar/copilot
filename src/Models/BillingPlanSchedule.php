<?php

namespace Guesl\CardConnect\CoPilot\Models;

class BillingPlanSchedule extends Model
{
    /**
     * The id of the billing plan schedule entry.
     *
     * Required: yes
     *
     * @var int
     */
    protected $billingPlanScheduleId;


    /**
     * The amount that was actually billed, if this payment was processed.
     *
     * Required: no
     *
     * @var int
     */
    protected $actualAmount;

    /**
     * The date this payment was made, if it was processed.
     * "MM/DD/YYYY"
     *
     * Required: no
     *
     * @var string
     */
    protected $actualPaymentDate;

    /**
     * Scheduled, Cancelled, Paid, or Failed.
     * Required: yes
     *
     * @var string
     */
    protected $paymentStatus;

    /**
     * The transaction id, if it was processed.
     *
     * Required: no
     *
     * @var string
     */
    protected $retref;

    /**
     * The amount scheduled to be billed.
     *
     * Required: yes
     *
     * @var float
     */
    protected $scheduledAmount;

    /**
     * The date the transaction is scheduled for
     * "MM/DD/YYYY"
     *
     * Required: yes
     *
     * @var int
     */
    protected $scheduledPaymentDate;

    /**
     * @return int
     */
    public function getBillingPlanScheduleId(): int
    {
        return $this->billingPlanScheduleId;
    }

    /**
     * @param int $billingPlanScheduleId
     */
    public function setBillingPlanScheduleId(int $billingPlanScheduleId): void
    {
        $this->billingPlanScheduleId = $billingPlanScheduleId;
    }

    /**
     * @return int
     */
    public function getActualAmount(): int
    {
        return $this->actualAmount;
    }

    /**
     * @param int $actualAmount
     */
    public function setActualAmount(int $actualAmount): void
    {
        $this->actualAmount = $actualAmount;
    }

    /**
     * @return string
     */
    public function getActualPaymentDate(): string
    {
        return $this->actualPaymentDate;
    }

    /**
     * @param string $actualPaymentDate
     */
    public function setActualPaymentDate(string $actualPaymentDate): void
    {
        $this->actualPaymentDate = $actualPaymentDate;
    }

    /**
     * @return string
     */
    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }

    /**
     * @param string $paymentStatus
     */
    public function setPaymentStatus(string $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * @return string
     */
    public function getRetref(): string
    {
        return $this->retref;
    }

    /**
     * @param string $retref
     */
    public function setRetref(string $retref): void
    {
        $this->retref = $retref;
    }

    /**
     * @return float
     */
    public function getScheduledAmount(): float
    {
        return $this->scheduledAmount;
    }

    /**
     * @param float $scheduledAmount
     */
    public function setScheduledAmount(float $scheduledAmount): void
    {
        $this->scheduledAmount = $scheduledAmount;
    }

    /**
     * @return int
     */
    public function getScheduledPaymentDate(): int
    {
        return $this->scheduledPaymentDate;
    }

    /**
     * @param int $scheduledPaymentDate
     */
    public function setScheduledPaymentDate(int $scheduledPaymentDate): void
    {
        $this->scheduledPaymentDate = $scheduledPaymentDate;
    }
}
