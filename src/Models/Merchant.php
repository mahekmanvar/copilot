<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Merchant extends Model
{
    /**
     * "akaBusinessName": "Mikes API Merchant AKA1",
     *
     * Required: no
     * Size: 200
     *
     * @var string
     */
    protected $akaBusinessName;

    /**
     * Required: no
     *
     * @var bool
     */
    protected $custPrimaryAcctFlg;

    /**
     * Required: yes
     * Size: 100
     *
     * @var string
     */
    protected $dbaName;

    /**
     * Required: yes
     * Size: 500
     *
     * @var string
     */
    protected $legalBusinessName;

    /**
     * TIN or SSN, can only be SSN if merchant -> ownership -> ownershipType is INDIVSOLE
     *
     * Required: yes
     * Size: 3
     *
     * @var string
     */
    protected $taxFilingMethod;

    /**
     * Required: yes
     * Size: 500
     *
     * @var string
     */
    protected $taxFilingName;

    /**
     * Required: yes
     *
     * @var Demographic
     */
    protected $demographic;

    /**
     * Use the following codes ARTICLE,GOVT
     *
     * Required: no
     *
     * @var string
     */
    protected $businessIdTypeCd;

    /**
     * MM/DD/YYYY
     *
     * Required: no
     * Size: 8
     *
     * @var string
     */
    protected $businessStartDate;

    /**
     * Required: yes
     *
     * @var BankDetail
     */
    protected $bankDetail;

    /**
     * Required: yes
     *
     * @var OwnerShip
     */
    protected $ownership;

    /**
     * Required: no
     *
     * @var MerchantContactInfo
     */
    protected $merchantContactInfo;

    /**
     * Required: yes
     * Size: 25
     *
     * @var null|string
     */
    protected $salesCode;

    /**
     * Required: no
     *
     * @var Processing
     */
    protected $processing;

    /**
     * Required: no
     *
     * @var bool
     */
    protected $webLeadFlg;

    /**
     * Required: no
     *
     * @var Pricing
     */
    protected $pricing;

    /**
     * Required: no
     *
     * @var Fee
     */
    protected $fee;

    /**
     * List of customField
     *
     * Required if the merchant's partner has one or more active required custom fields
     *
     * Required: yes (if the merchant's partner has one or more active required custom fields)
     * Size: 10
     *
     * @see CustomField
     * @var array
     */
    protected $customFields;

    /**
     * @return string
     */
    public function getAkaBusinessName(): string
    {
        return $this->akaBusinessName;
    }

    /**
     * @param string $akaBusinessName
     */
    public function setAkaBusinessName(string $akaBusinessName): void
    {
        $this->akaBusinessName = $akaBusinessName;
    }

    /**
     * @return bool
     */
    public function isCustPrimaryAcctFlg(): bool
    {
        return $this->custPrimaryAcctFlg;
    }

    /**
     * @param bool $custPrimaryAcctFlg
     */
    public function setCustPrimaryAcctFlg(bool $custPrimaryAcctFlg): void
    {
        $this->custPrimaryAcctFlg = $custPrimaryAcctFlg;
    }

    /**
     * @return string
     */
    public function getDbaName(): string
    {
        return $this->dbaName;
    }

    /**
     * @param string $dbaName
     */
    public function setDbaName(string $dbaName): void
    {
        $this->dbaName = $dbaName;
    }

    /**
     * @return string
     */
    public function getLegalBusinessName(): string
    {
        return $this->legalBusinessName;
    }

    /**
     * @param string $legalBusinessName
     */
    public function setLegalBusinessName(string $legalBusinessName): void
    {
        $this->legalBusinessName = $legalBusinessName;
    }

    /**
     * @return string
     */
    public function getTaxFilingMethod(): string
    {
        return $this->taxFilingMethod;
    }

    /**
     * @param string $taxFilingMethod
     */
    public function setTaxFilingMethod(string $taxFilingMethod): void
    {
        $this->taxFilingMethod = $taxFilingMethod;
    }

    /**
     * @return string
     */
    public function getTaxFilingName(): string
    {
        return $this->taxFilingName;
    }

    /**
     * @param string $taxFilingName
     */
    public function setTaxFilingName(string $taxFilingName): void
    {
        $this->taxFilingName = $taxFilingName;
    }

    /**
     * @return Demographic
     */
    public function getDemographic(): Demographic
    {
        return $this->demographic;
    }

    /**
     * @param Demographic $demographic
     */
    public function setDemographic(Demographic $demographic): void
    {
        $this->demographic = $demographic;
    }

    /**
     * @return string
     */
    public function getBusinessIdTypeCd(): string
    {
        return $this->businessIdTypeCd;
    }

    /**
     * @param string $businessIdTypeCd
     */
    public function setBusinessIdTypeCd(string $businessIdTypeCd): void
    {
        $this->businessIdTypeCd = $businessIdTypeCd;
    }

    /**
     * @return string
     */
    public function getBusinessStartDate(): string
    {
        return $this->businessStartDate;
    }

    /**
     * @param string $businessStartDate
     */
    public function setBusinessStartDate(string $businessStartDate): void
    {
        $this->businessStartDate = $businessStartDate;
    }

    /**
     * @return BankDetail
     */
    public function getBankDetail(): BankDetail
    {
        return $this->bankDetail;
    }

    /**
     * @param BankDetail $bankDetail
     */
    public function setBankDetail(BankDetail $bankDetail): void
    {
        $this->bankDetail = $bankDetail;
    }

    /**
     * @return OwnerShip
     */
    public function getOwnership(): OwnerShip
    {
        return $this->ownership;
    }

    /**
     * @param OwnerShip $ownership
     */
    public function setOwnership(OwnerShip $ownership): void
    {
        $this->ownership = $ownership;
    }

    /**
     * @return MerchantContactInfo
     */
    public function getMerchantContactInfo(): MerchantContactInfo
    {
        return $this->merchantContactInfo;
    }

    /**
     * @param MerchantContactInfo $merchantContactInfo
     */
    public function setMerchantContactInfo(MerchantContactInfo $merchantContactInfo): void
    {
        $this->merchantContactInfo = $merchantContactInfo;
    }

    /**
     * @return string
     */
    public function getSalesCode(): string
    {
        return $this->salesCode ?: "";
    }

    /**
     * @param string $salesCode
     */
    public function setSalesCode(string $salesCode): void
    {
        $this->salesCode = $salesCode;
    }

    /**
     * @return Processing
     */
    public function getProcessing(): Processing
    {
        return $this->processing;
    }

    /**
     * @param Processing $processing
     */
    public function setProcessing(Processing $processing): void
    {
        $this->processing = $processing;
    }

    /**
     * @return bool
     */
    public function isWebLeadFlg(): bool
    {
        return $this->webLeadFlg;
    }

    /**
     * @param bool $webLeadFlg
     */
    public function setWebLeadFlg(bool $webLeadFlg): void
    {
        $this->webLeadFlg = $webLeadFlg;
    }

    /**
     * @return Pricing
     */
    public function getPricing(): Pricing
    {
        return $this->pricing;
    }

    /**
     * @param Pricing $pricing
     */
    public function setPricing(Pricing $pricing): void
    {
        $this->pricing = $pricing;
    }

    /**
     * @return Fee
     */
    public function getFee(): Fee
    {
        return $this->fee;
    }

    /**
     * @param Fee $fee
     */
    public function setFee(Fee $fee): void
    {
        $this->fee = $fee;
    }

    /**
     * @return array
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
