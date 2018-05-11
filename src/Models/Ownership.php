<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Ownership extends Model
{
    /**
     * Required: yes
     *
     * @var Owner
     */
    protected $owner;

    /**
     * https://developer.cardconnect.com/copilotapi#ownership-type-enumeration-definition
     *
     * Required: no
     *
     * @var string
     */
    protected $ownershipTypeCd;

    /**
     * Required: yes
     * Size: 100
     *
     * @var string
     */
    protected $driversLicenseNumber;

    /**
     * https://developer.cardconnect.com/copilotapi#state-enumeration-definition
     *
     * Required: yes
     * Size: 2
     *
     * @var string
     */
    protected $driversLicenseStateCd;

    /**
     * 0-100%
     *
     * Required: no
     * Size: 3
     *
     * @var int
     */
    protected $ownerOwnershipPct;

    /**
     * @return Owner
     */
    public function getOwner(): Owner
    {
        return $this->owner;
    }

    /**
     * @param Owner $owner
     */
    public function setOwner(Owner $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getOwnershipTypeCd(): string
    {
        return $this->ownershipTypeCd;
    }

    /**
     * @param string $ownershipTypeCd
     */
    public function setOwnershipTypeCd(string $ownershipTypeCd): void
    {
        $this->ownershipTypeCd = $ownershipTypeCd;
    }

    /**
     * @return string
     */
    public function getDriversLicenseNumber(): string
    {
        return $this->driversLicenseNumber;
    }

    /**
     * @param string $driversLicenseNumber
     */
    public function setDriversLicenseNumber(string $driversLicenseNumber): void
    {
        $this->driversLicenseNumber = $driversLicenseNumber;
    }

    /**
     * @return string
     */
    public function getDriversLicenseStateCd(): string
    {
        return $this->driversLicenseStateCd;
    }

    /**
     * @param string $driversLicenseStateCd
     */
    public function setDriversLicenseStateCd(string $driversLicenseStateCd): void
    {
        $this->driversLicenseStateCd = $driversLicenseStateCd;
    }

    /**
     * @return int
     */
    public function getOwnerOwnershipPct(): int
    {
        return $this->ownerOwnershipPct;
    }

    /**
     * @param int $ownerOwnershipPct
     */
    public function setOwnerOwnershipPct(int $ownerOwnershipPct): void
    {
        $this->ownerOwnershipPct = $ownerOwnershipPct;
    }
}
