<?php

namespace Guesl\CardConnect\CoPilot\Models;

class PlatformDetails extends Model
{
    /**
     * Required: no (yes for CardPointe only accounts)
     * Size: 25
     *
     * @var string
     */
    protected $backEndMid;

    /**
     * Required: no (yes for CardPointe only accounts)
     * Size: 25
     *
     * @var string
     */
    protected $frontEndMid;

    /**
     * Required: no (yes for CardPointe only accounts)
     * Size: 25
     *
     * @var string
     */
    protected $processorReportingMid;

    /**
     * https://developer.cardconnect.com/copilotapi#back-end-platform-enumeration-definition
     *
     * Required: no (yes for CardPointe only accounts)
     * Size: 20
     *
     * @var string
     */
    protected $backEndPlatform;

    /**
     * https://developer.cardconnect.com/copilotapi#front-end-platform-enumeration-definition
     *
     * Required: no (yes for CardPointe only accounts)
     * Size: 20
     *
     * @var string
     */
    protected $frontEndPlatformCd;

    /**
     * https://developer.cardconnect.com/copilotapi#amex-program-enumeration-definition
     * "American Express(AMEX) OptBlue" or "American Express(AMEX) ESA".
     *
     * Required: yes
     * Size: 7
     *
     * @var string
     */
    protected $amexProgramAssetCd;

    /**
     * Required: yes
     * Size: 25
     *
     * @var string
     */
    protected $amexProgramMid;

    /**
     * Required: yes
     * Size: 25
     *
     * @var string
     */
    protected $discoverMid;

    /**
     * https://developer.cardconnect.com/copilotapi#discover-program-enumeration-definition
     *
     * "External Agent Sales Incentive" or "Merchant Acquiring Program".
     *
     * Required: yes
     * Size: 10
     *
     * @var string
     */
    protected $discoverProgramCd;

    /**
     * true = Merchant Services, false = CardPointe only
     *
     * Required: yes
     *
     * @var boolean
     */
    protected $acquiringFlg;

    /**
     * Required: no
     * Size: 9
     *
     * @var integer
     */
    protected $taxId;

    /**
     * Required: no
     *
     * @var string
     */
    protected $tid;

    /**
     * Required: no
     *
     * @var string
     */
    protected $busnsId;

    /**
     * state code
     * https://developer.cardconnect.com/copilotapi#state-enumeration-definition
     *
     * Required: yes
     * Size: 2
     *
     * @var string
     */
    protected $busnsIdPlaceOfIssue;

    /**
     * Like "USD".
     *
     * Required: no
     * Size: 5
     *
     * @var string
     */
    protected $currencyCode;

    /**
     * (numeric)
     *
     * Required: yes
     * Size: 5
     *
     * @var string
     */
    protected $mccId;

    /**
     * Required: yes
     * Size: 4000
     *
     * @var string
     */
    protected $businessDescription;

    /**
     * @return string
     */
    public function getBackEndMid(): string
    {
        return $this->backEndMid;
    }

    /**
     * @param string $backEndMid
     */
    public function setBackEndMid(string $backEndMid): void
    {
        $this->backEndMid = $backEndMid;
    }

    /**
     * @return string
     */
    public function getFrontEndMid(): string
    {
        return $this->frontEndMid;
    }

    /**
     * @param string $frontEndMid
     */
    public function setFrontEndMid(string $frontEndMid): void
    {
        $this->frontEndMid = $frontEndMid;
    }

    /**
     * @return string
     */
    public function getProcessorReportingMid(): string
    {
        return $this->processorReportingMid;
    }

    /**
     * @param string $processorReportingMid
     */
    public function setProcessorReportingMid(string $processorReportingMid): void
    {
        $this->processorReportingMid = $processorReportingMid;
    }

    /**
     * @return string
     */
    public function getBackEndPlatform(): string
    {
        return $this->backEndPlatform;
    }

    /**
     * @param string $backEndPlatform
     */
    public function setBackEndPlatform(string $backEndPlatform): void
    {
        $this->backEndPlatform = $backEndPlatform;
    }

    /**
     * @return string
     */
    public function getFrontEndPlatformCd(): string
    {
        return $this->frontEndPlatformCd;
    }

    /**
     * @param string $frontEndPlatformCd
     */
    public function setFrontEndPlatformCd(string $frontEndPlatformCd): void
    {
        $this->frontEndPlatformCd = $frontEndPlatformCd;
    }

    /**
     * @return string
     */
    public function getAmexProgramAssetCd(): string
    {
        return $this->amexProgramAssetCd;
    }

    /**
     * @param string $amexProgramAssetCd
     */
    public function setAmexProgramAssetCd(string $amexProgramAssetCd): void
    {
        $this->amexProgramAssetCd = $amexProgramAssetCd;
    }

    /**
     * @return string
     */
    public function getAmexProgramMid(): string
    {
        return $this->amexProgramMid;
    }

    /**
     * @param string $amexProgramMid
     */
    public function setAmexProgramMid(string $amexProgramMid): void
    {
        $this->amexProgramMid = $amexProgramMid;
    }

    /**
     * @return string
     */
    public function getDiscoverMid(): string
    {
        return $this->discoverMid;
    }

    /**
     * @param string $discoverMid
     */
    public function setDiscoverMid(string $discoverMid): void
    {
        $this->discoverMid = $discoverMid;
    }

    /**
     * @return string
     */
    public function getDiscoverProgramCd(): string
    {
        return $this->discoverProgramCd;
    }

    /**
     * @param string $discoverProgramCd
     */
    public function setDiscoverProgramCd(string $discoverProgramCd): void
    {
        $this->discoverProgramCd = $discoverProgramCd;
    }

    /**
     * @return bool
     */
    public function isAcquiringFlg(): bool
    {
        return $this->acquiringFlg;
    }

    /**
     * @param bool $acquiringFlg
     */
    public function setAcquiringFlg(bool $acquiringFlg): void
    {
        $this->acquiringFlg = $acquiringFlg;
    }

    /**
     * @return int
     */
    public function getTaxId(): int
    {
        return $this->taxId;
    }

    /**
     * @param int $taxId
     */
    public function setTaxId(int $taxId): void
    {
        $this->taxId = $taxId;
    }

    /**
     * @return string
     */
    public function getTid(): string
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     */
    public function setTid(string $tid): void
    {
        $this->tid = $tid;
    }

    /**
     * @return string
     */
    public function getBusnsId(): string
    {
        return $this->busnsId;
    }

    /**
     * @param string $busnsId
     */
    public function setBusnsId(string $busnsId): void
    {
        $this->busnsId = $busnsId;
    }

    /**
     * @return string
     */
    public function getBusnsIdPlaceOfIssue(): string
    {
        return $this->busnsIdPlaceOfIssue;
    }

    /**
     * @param string $busnsIdPlaceOfIssue
     */
    public function setBusnsIdPlaceOfIssue(string $busnsIdPlaceOfIssue): void
    {
        $this->busnsIdPlaceOfIssue = $busnsIdPlaceOfIssue;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getMccId(): string
    {
        return $this->mccId;
    }

    /**
     * @param string $mccId
     */
    public function setMccId(string $mccId): void
    {
        $this->mccId = $mccId;
    }

    /**
     * @return string
     */
    public function getBusinessDescription(): string
    {
        return $this->businessDescription;
    }

    /**
     * @param string $businessDescription
     */
    public function setBusinessDescription(string $businessDescription): void
    {
        $this->businessDescription = $businessDescription;
    }
}
