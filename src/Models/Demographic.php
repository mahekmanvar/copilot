<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Demographic extends Model
{
    /**
     * Like: "CO", "AL", "AK", "NY"...
     * https://developer.cardconnect.com/copilotapi#state-codes
     *
     * Required: no
     * Size: 2
     *
     * @var string
     */
    protected $businessIncorporatedStateCd;

    /**
     * one of (PT, MT, CT, ET, HST)
     *
     * Required: no
     * Size: 3
     *
     * @var string
     */
    protected $merchantTimeZone;

    /**
     * Required if merchant -> processing -> modeOfTransaction-> eCommercePct is greater than 0
     *
     * Required: yes (if merchant -> processing -> modeOfTransaction-> eCommercePct is greater than 0)
     * Size: 200
     *
     * @var string
     */
    protected $websiteAddress;

    /**
     * ###-###-####
     *
     * Required: no
     * Size: 12
     *
     * @var string
     */
    protected $businessPhone;

    /**
     * ###-###-####
     *
     * Required: no
     * Size: 12
     *
     * @var string
     */
    protected $businessFax;

    /**
     * Required: yes
     *
     * @var Address
     */
    protected $businessAddress;

    /**
     * Required: yes
     *
     * @var Address
     */
    protected $mailingAddress;

    /**
     * @return string
     */
    public function getBusinessIncorporatedStateCd(): string
    {
        return $this->businessIncorporatedStateCd;
    }

    /**
     * @param string $businessIncorporatedStateCd
     */
    public function setBusinessIncorporatedStateCd(string $businessIncorporatedStateCd): void
    {
        $this->businessIncorporatedStateCd = $businessIncorporatedStateCd;
    }

    /**
     * @return string
     */
    public function getMerchantTimeZone(): string
    {
        return $this->merchantTimeZone;
    }

    /**
     * @param string $merchantTimeZone
     */
    public function setMerchantTimeZone(string $merchantTimeZone): void
    {
        $this->merchantTimeZone = $merchantTimeZone;
    }

    /**
     * @return string
     */
    public function getWebsiteAddress(): string
    {
        return $this->websiteAddress;
    }

    /**
     * @param string $websiteAddress
     */
    public function setWebsiteAddress(string $websiteAddress): void
    {
        $this->websiteAddress = $websiteAddress;
    }

    /**
     * @return string
     */
    public function getBusinessPhone(): string
    {
        return $this->businessPhone;
    }

    /**
     * @param string $businessPhone
     */
    public function setBusinessPhone(string $businessPhone): void
    {
        $this->businessPhone = $businessPhone;
    }

    /**
     * @return string
     */
    public function getBusinessFax(): string
    {
        return $this->businessFax;
    }

    /**
     * @param string $businessFax
     */
    public function setBusinessFax(string $businessFax): void
    {
        $this->businessFax = $businessFax;
    }

    /**
     * @return Address
     */
    public function getBusinessAddress(): Address
    {
        return $this->businessAddress;
    }

    /**
     * @param Address $businessAddress
     */
    public function setBusinessAddress(Address $businessAddress): void
    {
        $this->businessAddress = $businessAddress;
    }

    /**
     * @return Address
     */
    public function getMailingAddress(): Address
    {
        return $this->mailingAddress;
    }

    /**
     * @param Address $mailingAddress
     */
    public function setMailingAddress(Address $mailingAddress): void
    {
        $this->mailingAddress = $mailingAddress;
    }
}
