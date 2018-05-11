<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Owner extends Model
{
    /**
     * Required: yes
     *
     * @var Address
     */
    protected $ownerAddress;

    /**
     * Required: yes
     * Size: 300
     *
     * @var string
     */
    protected $ownerEmail;

    /**
     * Required: yes
     * Size: 300
     *
     * @var string
     */
    protected $ownerName;

    /**
     * MM/DD/YYYY
     * Required: no
     * Size: 8
     *
     * @var string
     */
    protected $ownerDob;

    /**
     * ###-###-####
     * Required: yes
     * Size: 12
     *
     * @var string
     */
    protected $ownerPhone;

    /**
     * ###-###-####
     * Required: yes
     * Size: 12
     *
     * @var string
     */
    protected $ownerMobilePhone;

    /**
     * ###-##-####
     * Required: yes
     * Size: 11
     *
     * @var string
     */
    protected $ownerSSN;

    /**
     * https://developer.cardconnect.com/copilotapi#owner-definition
     *
     * Required: yes
     * Size: 200
     *
     * @var string
     */
    protected $ownerTitle;

    /**
     * @return Address
     */
    public function getOwnerAddress(): Address
    {
        return $this->ownerAddress;
    }

    /**
     * @param Address $ownerAddress
     */
    public function setOwnerAddress(Address $ownerAddress): void
    {
        $this->ownerAddress = $ownerAddress;
    }

    /**
     * @return string
     */
    public function getOwnerEmail(): string
    {
        return $this->ownerEmail;
    }

    /**
     * @param string $ownerEmail
     */
    public function setOwnerEmail(string $ownerEmail): void
    {
        $this->ownerEmail = $ownerEmail;
    }

    /**
     * @return string
     */
    public function getOwnerName(): string
    {
        return $this->ownerName;
    }

    /**
     * @param string $ownerName
     */
    public function setOwnerName(string $ownerName): void
    {
        $this->ownerName = $ownerName;
    }

    /**
     * @return string
     */
    public function getOwnerDob(): string
    {
        return $this->ownerDob;
    }

    /**
     * @param string $ownerDob
     */
    public function setOwnerDob(string $ownerDob): void
    {
        $this->ownerDob = $ownerDob;
    }

    /**
     * @return string
     */
    public function getOwnerPhone(): string
    {
        return $this->ownerPhone;
    }

    /**
     * @param string $ownerPhone
     */
    public function setOwnerPhone(string $ownerPhone): void
    {
        $this->ownerPhone = $ownerPhone;
    }

    /**
     * @return string
     */
    public function getOwnerMobilePhone(): string
    {
        return $this->ownerMobilePhone;
    }

    /**
     * @param string $ownerMobilePhone
     */
    public function setOwnerMobilePhone(string $ownerMobilePhone): void
    {
        $this->ownerMobilePhone = $ownerMobilePhone;
    }

    /**
     * @return string
     */
    public function getOwnerSSN(): string
    {
        return $this->ownerSSN;
    }

    /**
     * @param string $ownerSSN
     */
    public function setOwnerSSN(string $ownerSSN): void
    {
        $this->ownerSSN = $ownerSSN;
    }

    /**
     * @return string
     */
    public function getOwnerTitle(): string
    {
        return $this->ownerTitle;
    }

    /**
     * @param string $ownerTitle
     */
    public function setOwnerTitle(string $ownerTitle): void
    {
        $this->ownerTitle = $ownerTitle;
    }
}
