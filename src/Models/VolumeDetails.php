<?php

namespace Guesl\CardConnect\CoPilot\Models;

class VolumeDetails extends Model
{
    /**
     * Required: yes
     *
     * @var float
     */
    protected $averageMonthlyVolume;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $highTicketAmount;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $averageTicketAmount;

    /**
     * @return float
     */
    public function getAverageMonthlyVolume(): float
    {
        return $this->averageMonthlyVolume;
    }

    /**
     * @param float $averageMonthlyVolume
     */
    public function setAverageMonthlyVolume(float $averageMonthlyVolume): void
    {
        $this->averageMonthlyVolume = $averageMonthlyVolume;
    }

    /**
     * @return float
     */
    public function getHighTicketAmount(): float
    {
        return $this->highTicketAmount;
    }

    /**
     * @param float $highTicketAmount
     */
    public function setHighTicketAmount(float $highTicketAmount): void
    {
        $this->highTicketAmount = $highTicketAmount;
    }

    /**
     * @return float
     */
    public function getAverageTicketAmount(): float
    {
        return $this->averageTicketAmount;
    }

    /**
     * @param float $averageTicketAmount
     */
    public function setAverageTicketAmount(float $averageTicketAmount): void
    {
        $this->averageTicketAmount = $averageTicketAmount;
    }
}
