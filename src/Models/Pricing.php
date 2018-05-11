<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Pricing extends Model
{
    /**
     * Required: yes
     *
     * @var FlatPricing
     */
    protected $flatPricing;

    /**
     * Required: yes
     *
     * @var ICPlusPricing
     */
    protected $icPlusPricing;

    /**
     * @return FlatPricing
     */
    public function getFlatPricing(): FlatPricing
    {
        return $this->flatPricing;
    }

    /**
     * @param FlatPricing $flatPricing
     */
    public function setFlatPricing(FlatPricing $flatPricing): void
    {
        $this->flatPricing = $flatPricing;
    }

    /**
     * @return ICPlusPricing
     */
    public function getIcPlusPricing(): ICPlusPricing
    {
        return $this->icPlusPricing;
    }

    /**
     * @param ICPlusPricing $icPlusPricing
     */
    public function setIcPlusPricing(ICPlusPricing $icPlusPricing): void
    {
        $this->icPlusPricing = $icPlusPricing;
    }
}
