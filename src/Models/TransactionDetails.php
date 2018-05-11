<?php

namespace Guesl\CardConnect\CoPilot\Models;

class TransactionDetails extends Model
{
    /**
     * 0-100%
     * Required: yes
     * Size: 3
     *
     * @var int
     */
    protected $eCommercePct;

    /**
     * 0-100%
     * Required: yes
     * Size: 3
     *
     * @var int
     */
    protected $keyedPct;

    /**
     * 0-100%
     * Required: yes
     * Size: 3
     *
     * @var int
     */
    protected $mailOrderPct;

    /**
     * 0-100%
     * Required: yes
     * Size: 3
     *
     * @var int
     */
    protected $swipedPct;

    /**
     * @return int
     */
    public function getECommercePct(): int
    {
        return $this->eCommercePct;
    }

    /**
     * @param int $eCommercePct
     */
    public function setECommercePct(int $eCommercePct): void
    {
        $this->eCommercePct = $eCommercePct;
    }

    /**
     * @return int
     */
    public function getKeyedPct(): int
    {
        return $this->keyedPct;
    }

    /**
     * @param int $keyedPct
     */
    public function setKeyedPct(int $keyedPct): void
    {
        $this->keyedPct = $keyedPct;
    }

    /**
     * @return int
     */
    public function getMailOrderPct(): int
    {
        return $this->mailOrderPct;
    }

    /**
     * @param int $mailOrderPct
     */
    public function setMailOrderPct(int $mailOrderPct): void
    {
        $this->mailOrderPct = $mailOrderPct;
    }

    /**
     * @return int
     */
    public function getSwipedPct(): int
    {
        return $this->swipedPct;
    }

    /**
     * @param int $swipedPct
     */
    public function setSwipedPct(int $swipedPct): void
    {
        $this->swipedPct = $swipedPct;
    }
}
