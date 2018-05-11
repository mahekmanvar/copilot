<?php

namespace Guesl\CardConnect\CoPilot\Models;

class MerchantStatus extends Model
{
    /**
     * MM/DD/YYYY HH:II:SS a
     * "m/d/Y H:i:s a"
     *
     * Like "10/21/2013 08:18:18 AM".
     *
     * @var string
     */
    protected $approvedDatetime;

    /**
     * MM/DD/YYYY HH:II:SS a
     * "m/d/Y H:i:s a"
     *
     * Like "10/21/2013 08:18:18 AM".
     *
     * @var string
     */
    protected $boardedDatetime;

    /**
     * MM/DD/YYYY HH:II:SS a
     * "m/d/Y H:i:s a"
     *
     * Like "10/21/2013 08:18:18 AM".
     *
     * @var string
     */
    protected $cancelledDatetime;

    /**
     * MM/DD/YYYY HH:II:SS a
     * "m/d/Y H:i:s a"
     *
     * Like "10/21/2013 08:18:18 AM".
     *
     * @var string
     */
    protected $declinedDatetime;

    /**
     * MM/DD/YYYY HH:II:SS a
     * "m/d/Y H:i:s a"
     *
     * Like "10/21/2013 08:18:18 AM".
     *
     * @var string
     */
    protected $liveDatetime;

    /**
     * @var bool
     */
    protected $boardingProcessPendingFlg;

    /**
     * @var string
     */
    protected $boardingProcessStatusCd;

    /**
     * @var string
     */
    protected $gatewayBoardingStatusCd;

    /**
     * @return string
     */
    public function getApprovedDatetime(): string
    {
        return $this->approvedDatetime;
    }

    /**
     * @param string $approvedDatetime
     */
    public function setApprovedDatetime(string $approvedDatetime): void
    {
        $this->approvedDatetime = $approvedDatetime;
    }

    /**
     * @return string
     */
    public function getBoardedDatetime(): string
    {
        return $this->boardedDatetime;
    }

    /**
     * @param string $boardedDatetime
     */
    public function setBoardedDatetime(string $boardedDatetime): void
    {
        $this->boardedDatetime = $boardedDatetime;
    }

    /**
     * @return string
     */
    public function getCancelledDatetime(): string
    {
        return $this->cancelledDatetime;
    }

    /**
     * @param string $cancelledDatetime
     */
    public function setCancelledDatetime(string $cancelledDatetime): void
    {
        $this->cancelledDatetime = $cancelledDatetime;
    }

    /**
     * @return string
     */
    public function getDeclinedDatetime(): string
    {
        return $this->declinedDatetime;
    }

    /**
     * @param string $declinedDatetime
     */
    public function setDeclinedDatetime(string $declinedDatetime): void
    {
        $this->declinedDatetime = $declinedDatetime;
    }

    /**
     * @return string
     */
    public function getLiveDatetime(): string
    {
        return $this->liveDatetime;
    }

    /**
     * @param string $liveDatetime
     */
    public function setLiveDatetime(string $liveDatetime): void
    {
        $this->liveDatetime = $liveDatetime;
    }

    /**
     * @return bool
     */
    public function isBoardingProcessPendingFlg(): bool
    {
        return $this->boardingProcessPendingFlg;
    }

    /**
     * @param bool $boardingProcessPendingFlg
     */
    public function setBoardingProcessPendingFlg(bool $boardingProcessPendingFlg): void
    {
        $this->boardingProcessPendingFlg = $boardingProcessPendingFlg;
    }

    /**
     * @return string
     */
    public function getBoardingProcessStatusCd(): string
    {
        return $this->boardingProcessStatusCd;
    }

    /**
     * @param string $boardingProcessStatusCd
     */
    public function setBoardingProcessStatusCd(string $boardingProcessStatusCd): void
    {
        $this->boardingProcessStatusCd = $boardingProcessStatusCd;
    }

    /**
     * @return string
     */
    public function getGatewayBoardingStatusCd(): string
    {
        return $this->gatewayBoardingStatusCd;
    }

    /**
     * @param string $gatewayBoardingStatusCd
     */
    public function setGatewayBoardingStatusCd(string $gatewayBoardingStatusCd): void
    {
        $this->gatewayBoardingStatusCd = $gatewayBoardingStatusCd;
    }
}
