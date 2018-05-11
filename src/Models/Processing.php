<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Processing extends Model
{
    /**
     * Required: yes
     *
     * @var PlatformDetails
     */
    protected $platformDetails;

    /**
     * Required: yes
     *
     * @var BusinessDetails
     */
    protected $businessDetails;

    /**
     * Required: yes
     *
     * @var VolumeDetails
     */
    protected $volumeDetails;

    /**
     * Required: yes
     *
     * @var DeliveryDetails
     */
    protected $deliveryPercentages;

    /**
     * Required: yes
     *
     * @var TransactionDetails
     */
    protected $modeOfTransaction;

    /**
     * @return PlatformDetails
     */
    public function getPlatformDetails(): PlatformDetails
    {
        return $this->platformDetails;
    }

    /**
     * @param PlatformDetails $platformDetails
     */
    public function setPlatformDetails(PlatformDetails $platformDetails): void
    {
        $this->platformDetails = $platformDetails;
    }

    /**
     * @return BusinessDetails
     */
    public function getBusinessDetails(): BusinessDetails
    {
        return $this->businessDetails;
    }

    /**
     * @param BusinessDetails $businessDetails
     */
    public function setBusinessDetails(BusinessDetails $businessDetails): void
    {
        $this->businessDetails = $businessDetails;
    }

    /**
     * @return VolumeDetails
     */
    public function getVolumeDetails(): VolumeDetails
    {
        return $this->volumeDetails;
    }

    /**
     * @param VolumeDetails $volumeDetails
     */
    public function setVolumeDetails(VolumeDetails $volumeDetails): void
    {
        $this->volumeDetails = $volumeDetails;
    }

    /**
     * @return DeliveryDetails
     */
    public function getDeliveryPercentages(): DeliveryDetails
    {
        return $this->deliveryPercentages;
    }

    /**
     * @param DeliveryDetails $deliveryPercentages
     */
    public function setDeliveryPercentages(DeliveryDetails $deliveryPercentages): void
    {
        $this->deliveryPercentages = $deliveryPercentages;
    }

    /**
     * @return TransactionDetails
     */
    public function getModeOfTransaction(): TransactionDetails
    {
        return $this->modeOfTransaction;
    }

    /**
     * @param TransactionDetails $modeOfTransaction
     */
    public function setModeOfTransaction(TransactionDetails $modeOfTransaction): void
    {
        $this->modeOfTransaction = $modeOfTransaction;
    }

}
