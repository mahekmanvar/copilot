<?php

namespace Guesl\CardConnect\CoPilot\Models;

class BillingPlan extends Model
{
    /**
     * The id of the billing plan, should be null when creating a new plan
     *
     * Required: no
     * Size: 11
     *
     * @var int
     */
    protected $billingPlanId;


    /**
     * The mid the billing plan is being created for
     *
     * Required: yes
     * Size: 11
     *
     * @var int
     */
    protected $merchId;

    /**
     * The profile being billed
     *
     * Required: yes
     * Size: 20
     *
     * @var int
     */
    protected $profileId;

    /**
     * The account id within the profile to use.
     * If not provided when creating a billing plan, the default account will be used. This field is always returned when retrieving a billing plan.
     *
     * Required: no
     * Size: 3
     *
     * @var string
     */
    protected $acctId;

    /**
     * The amount to bill per time period
     *
     * Required: yes
     *
     * @var float
     */
    protected $amount;

    /**
     * 1 for daily, 2 for weekly, 3 for monthly, or 4 for yearly
     *
     * Required: yes
     *
     * @var int
     */
    protected $timeSpan;

    /**
     * Bill the customer every x time periods
     *
     * Required: yes
     *
     * @var int
     */
    protected $every;

    /**
     * C for cancelled, N for number of payments, D for date
     *
     * Required: yes
     * Size: 1
     *
     * @var string
     */
    protected $untilCondition;

    /**
     * Required if untilCondition = N
     *
     * Required: yes (if untilCondition = N)
     *
     * @var int
     */
    protected $untilNumPayments;

    /**
     * Required if untilCondition = D. Date format: MMDDYYYY
     *
     * Required: yes (if untilCondition = D. Date format: MMDDYYYY)
     * Size: 8
     *
     * @var String
     */
    protected $untilDate;

    /**
     * The currency symbol for the transaction. Like "$".
     *
     * Required: yes
     * Size: 1
     *
     * @var string
     */
    protected $currencySymbol;

    /**
     * Date format: MMDDYYYY.
     *
     * Required: yes
     * Size: 8
     *
     * @var string
     */
    protected $startDate;

    /**
     * The email_receipt option should be provided with a value of 0 for no or 1 for yes. See example JSON.
     *
     * "options": [{
     *   "name": "email_receipt",
     *   "value": "0"
     * }],
     *
     * Required: yes
     *
     * @var array
     */
    protected $options;

    /**
     * The billing plan status. A for active or C for cancelled.
     *
     * Required: no
     * Size: 1
     *
     * @var string
     */
    protected $planSatus;

    /**
     * An array of the payments in the billing plan.
     * This cannot be set, it is only returned when fetching a billing plan. This array will always contain all past payments.
     * In addition, it will also contain future scheduled payments
     * (up to 1000 when untilCondition = N or D, or one year of payments when untilCondition = C)
     *
     * Required: no
     *
     * @var array
     */
    protected $billingPlanSchedules;

    /**
     * @return int
     */
    public function getBillingPlanId(): int
    {
        return $this->billingPlanId;
    }

    /**
     * @param int $billingPlanId
     */
    public function setBillingPlanId(int $billingPlanId): void
    {
        $this->billingPlanId = $billingPlanId;
    }

    /**
     * @return int
     */
    public function getMerchId(): int
    {
        return $this->merchId;
    }

    /**
     * @param int $merchId
     */
    public function setMerchId(int $merchId): void
    {
        $this->merchId = $merchId;
    }

    /**
     * @return int
     */
    public function getProfileId(): int
    {
        return $this->profileId;
    }

    /**
     * @param int $profileId
     */
    public function setProfileId(int $profileId): void
    {
        $this->profileId = $profileId;
    }

    /**
     * @return string
     */
    public function getAcctId(): string
    {
        return $this->acctId;
    }

    /**
     * @param string $acctId
     */
    public function setAcctId(string $acctId): void
    {
        $this->acctId = $acctId;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getTimeSpan(): int
    {
        return $this->timeSpan;
    }

    /**
     * @param int $timeSpan
     */
    public function setTimeSpan(int $timeSpan): void
    {
        $this->timeSpan = $timeSpan;
    }

    /**
     * @return int
     */
    public function getEvery(): int
    {
        return $this->every;
    }

    /**
     * @param int $every
     */
    public function setEvery(int $every): void
    {
        $this->every = $every;
    }

    /**
     * @return string
     */
    public function getUntilCondition(): string
    {
        return $this->untilCondition;
    }

    /**
     * @param string $untilCondition
     */
    public function setUntilCondition(string $untilCondition): void
    {
        $this->untilCondition = $untilCondition;
    }

    /**
     * @return int
     */
    public function getUntilNumPayments(): int
    {
        return $this->untilNumPayments;
    }

    /**
     * @param int $untilNumPayments
     */
    public function setUntilNumPayments(int $untilNumPayments): void
    {
        $this->untilNumPayments = $untilNumPayments;
    }

    /**
     * @return String
     */
    public function getUntilDate(): String
    {
        return $this->untilDate;
    }

    /**
     * @param String $untilDate
     */
    public function setUntilDate(String $untilDate): void
    {
        $this->untilDate = $untilDate;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol(): string
    {
        return $this->currencySymbol;
    }

    /**
     * @param string $currencySymbol
     */
    public function setCurrencySymbol(string $currencySymbol): void
    {
        $this->currencySymbol = $currencySymbol;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getPlanSatus(): string
    {
        return $this->planSatus;
    }

    /**
     * @param string $planSatus
     */
    public function setPlanSatus(string $planSatus): void
    {
        $this->planSatus = $planSatus;
    }

    /**
     * @return array
     */
    public function getBillingPlanSchedules(): array
    {
        return $this->billingPlanSchedules;
    }

    /**
     * @param array $billingPlanSchedules
     */
    public function setBillingPlanSchedules(array $billingPlanSchedules): void
    {
        $this->billingPlanSchedules = $billingPlanSchedules;
    }
}
