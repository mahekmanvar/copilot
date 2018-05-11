<?php

namespace Guesl\CardConnect\CoPilot\Models;

class ICPlusPricing extends Model
{
    /**
     * Only valid if amexProgramAssetCd is ESA
     *
     * Required: yes
     *
     * @var float
     */
    protected $amexOptBlueQualDiscountPct;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $discoverQualCreditDiscountPct;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $mastercardQualCreditDiscountPct;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $visaQualCreditDiscountPct;

    /**
     * @return float
     */
    public function getAmexOptBlueQualDiscountPct(): float
    {
        return $this->amexOptBlueQualDiscountPct;
    }

    /**
     * @param float $amexOptBlueQualDiscountPct
     */
    public function setAmexOptBlueQualDiscountPct(float $amexOptBlueQualDiscountPct): void
    {
        $this->amexOptBlueQualDiscountPct = $amexOptBlueQualDiscountPct;
    }

    /**
     * @return float
     */
    public function getDiscoverQualCreditDiscountPct(): float
    {
        return $this->discoverQualCreditDiscountPct;
    }

    /**
     * @param float $discoverQualCreditDiscountPct
     */
    public function setDiscoverQualCreditDiscountPct(float $discoverQualCreditDiscountPct): void
    {
        $this->discoverQualCreditDiscountPct = $discoverQualCreditDiscountPct;
    }

    /**
     * @return float
     */
    public function getMastercardQualCreditDiscountPct(): float
    {
        return $this->mastercardQualCreditDiscountPct;
    }

    /**
     * @param float $mastercardQualCreditDiscountPct
     */
    public function setMastercardQualCreditDiscountPct(float $mastercardQualCreditDiscountPct): void
    {
        $this->mastercardQualCreditDiscountPct = $mastercardQualCreditDiscountPct;
    }

    /**
     * @return float
     */
    public function getVisaQualCreditDiscountPct(): float
    {
        return $this->visaQualCreditDiscountPct;
    }

    /**
     * @param float $visaQualCreditDiscountPct
     */
    public function setVisaQualCreditDiscountPct(float $visaQualCreditDiscountPct): void
    {
        $this->visaQualCreditDiscountPct = $visaQualCreditDiscountPct;
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            "amex" => [
                "optBlueQualDiscountPct" => $this->amexOptBlueQualDiscountPct,
            ],
            "discover" => [
                "qualCreditDiscountPct" => $this->discoverQualCreditDiscountPct,
            ],
            "mastercard" => [
                "qualCreditDiscountPct" => $this->mastercardQualCreditDiscountPct,
            ],
            "visa" => [
                "qualCreditDiscountPct" => $this->visaQualCreditDiscountPct,
            ]
        ];
    }

    /**
     * Populate the object by the values array.
     *
     * @param array $values
     * @return $this
     */
    public function populate(array $values)
    {
        if (array_key_exists("amex", $values) && array_key_exists("optBlueQualDiscountPct", $values["amex"])) {
            $this->amexOptBlueQualDiscountPct = $values["amex"]["optBlueQualDiscountPct"];
        }
        if (array_key_exists("discover", $values) && array_key_exists("qualCreditDiscountPct", $values["amex"])) {
            $this->discoverQualCreditDiscountPct = $values["discover"]["qualCreditDiscountPct"];
        }
        if (array_key_exists("mastercard", $values) && array_key_exists("qualCreditDiscountPct", $values["amex"])) {
            $this->mastercardQualCreditDiscountPct = $values["mastercard"]["qualCreditDiscountPct"];
        }
        if (array_key_exists("visa", $values) && array_key_exists("qualCreditDiscountPct", $values["amex"])) {
            $this->visaQualCreditDiscountPct = $values["visa"]["qualCreditDiscountPct"];
        }
        return $this;
    }
}
