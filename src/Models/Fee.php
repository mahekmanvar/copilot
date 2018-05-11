<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Fee extends Model
{
    /**
     * Required: yes
     *
     * @var float
     */
    protected $achBatchFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $addressVerifFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $annualMembershipFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $appFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $authFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $chargebackFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $dataBreachFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $ddaRejectFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $earlyCancelFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $minProcessFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $monthlyEquipmentRentalFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $pciAnnualFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $pciNonComplianceFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $regProdMonthlyFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $retrievalFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $statementFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $transactionFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $voiceAuthFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $wirelessActivationFee;

    /**
     * Required: yes
     *
     * @var float
     */
    protected $wirelessFee;

    /**
     * Required: no
     *
     * @var bool
     */
    protected $duesAndAssessmentsFlg;

    /**
     * Required: no
     *
     * @var bool
     */
    protected $passthruInterchgCostsFlg;

    /**
     * @return float
     */
    public function getAchBatchFee(): float
    {
        return $this->achBatchFee;
    }

    /**
     * @param float $achBatchFee
     */
    public function setAchBatchFee(float $achBatchFee): void
    {
        $this->achBatchFee = $achBatchFee;
    }

    /**
     * @return float
     */
    public function getAddressVerifFee(): float
    {
        return $this->addressVerifFee;
    }

    /**
     * @param float $addressVerifFee
     */
    public function setAddressVerifFee(float $addressVerifFee): void
    {
        $this->addressVerifFee = $addressVerifFee;
    }

    /**
     * @return float
     */
    public function getAnnualMembershipFee(): float
    {
        return $this->annualMembershipFee;
    }

    /**
     * @param float $annualMembershipFee
     */
    public function setAnnualMembershipFee(float $annualMembershipFee): void
    {
        $this->annualMembershipFee = $annualMembershipFee;
    }

    /**
     * @return float
     */
    public function getAppFee(): float
    {
        return $this->appFee;
    }

    /**
     * @param float $appFee
     */
    public function setAppFee(float $appFee): void
    {
        $this->appFee = $appFee;
    }

    /**
     * @return float
     */
    public function getAuthFee(): float
    {
        return $this->authFee;
    }

    /**
     * @param float $authFee
     */
    public function setAuthFee(float $authFee): void
    {
        $this->authFee = $authFee;
    }

    /**
     * @return float
     */
    public function getChargebackFee(): float
    {
        return $this->chargebackFee;
    }

    /**
     * @param float $chargebackFee
     */
    public function setChargebackFee(float $chargebackFee): void
    {
        $this->chargebackFee = $chargebackFee;
    }

    /**
     * @return float
     */
    public function getDataBreachFee(): float
    {
        return $this->dataBreachFee;
    }

    /**
     * @param float $dataBreachFee
     */
    public function setDataBreachFee(float $dataBreachFee): void
    {
        $this->dataBreachFee = $dataBreachFee;
    }

    /**
     * @return float
     */
    public function getDdaRejectFee(): float
    {
        return $this->ddaRejectFee;
    }

    /**
     * @param float $ddaRejectFee
     */
    public function setDdaRejectFee(float $ddaRejectFee): void
    {
        $this->ddaRejectFee = $ddaRejectFee;
    }

    /**
     * @return float
     */
    public function getEarlyCancelFee(): float
    {
        return $this->earlyCancelFee;
    }

    /**
     * @param float $earlyCancelFee
     */
    public function setEarlyCancelFee(float $earlyCancelFee): void
    {
        $this->earlyCancelFee = $earlyCancelFee;
    }

    /**
     * @return float
     */
    public function getMinProcessFee(): float
    {
        return $this->minProcessFee;
    }

    /**
     * @param float $minProcessFee
     */
    public function setMinProcessFee(float $minProcessFee): void
    {
        $this->minProcessFee = $minProcessFee;
    }

    /**
     * @return float
     */
    public function getMonthlyEquipmentRentalFee(): float
    {
        return $this->monthlyEquipmentRentalFee;
    }

    /**
     * @param float $monthlyEquipmentRentalFee
     */
    public function setMonthlyEquipmentRentalFee(float $monthlyEquipmentRentalFee): void
    {
        $this->monthlyEquipmentRentalFee = $monthlyEquipmentRentalFee;
    }

    /**
     * @return float
     */
    public function getPciAnnualFee(): float
    {
        return $this->pciAnnualFee;
    }

    /**
     * @param float $pciAnnualFee
     */
    public function setPciAnnualFee(float $pciAnnualFee): void
    {
        $this->pciAnnualFee = $pciAnnualFee;
    }

    /**
     * @return float
     */
    public function getPciNonComplianceFee(): float
    {
        return $this->pciNonComplianceFee;
    }

    /**
     * @param float $pciNonComplianceFee
     */
    public function setPciNonComplianceFee(float $pciNonComplianceFee): void
    {
        $this->pciNonComplianceFee = $pciNonComplianceFee;
    }

    /**
     * @return float
     */
    public function getRegProdMonthlyFee(): float
    {
        return $this->regProdMonthlyFee;
    }

    /**
     * @param float $regProdMonthlyFee
     */
    public function setRegProdMonthlyFee(float $regProdMonthlyFee): void
    {
        $this->regProdMonthlyFee = $regProdMonthlyFee;
    }

    /**
     * @return float
     */
    public function getRetrievalFee(): float
    {
        return $this->retrievalFee;
    }

    /**
     * @param float $retrievalFee
     */
    public function setRetrievalFee(float $retrievalFee): void
    {
        $this->retrievalFee = $retrievalFee;
    }

    /**
     * @return float
     */
    public function getStatementFee(): float
    {
        return $this->statementFee;
    }

    /**
     * @param float $statementFee
     */
    public function setStatementFee(float $statementFee): void
    {
        $this->statementFee = $statementFee;
    }

    /**
     * @return float
     */
    public function getTransactionFee(): float
    {
        return $this->transactionFee;
    }

    /**
     * @param float $transactionFee
     */
    public function setTransactionFee(float $transactionFee): void
    {
        $this->transactionFee = $transactionFee;
    }

    /**
     * @return float
     */
    public function getVoiceAuthFee(): float
    {
        return $this->voiceAuthFee;
    }

    /**
     * @param float $voiceAuthFee
     */
    public function setVoiceAuthFee(float $voiceAuthFee): void
    {
        $this->voiceAuthFee = $voiceAuthFee;
    }

    /**
     * @return float
     */
    public function getWirelessActivationFee(): float
    {
        return $this->wirelessActivationFee;
    }

    /**
     * @param float $wirelessActivationFee
     */
    public function setWirelessActivationFee(float $wirelessActivationFee): void
    {
        $this->wirelessActivationFee = $wirelessActivationFee;
    }

    /**
     * @return float
     */
    public function getWirelessFee(): float
    {
        return $this->wirelessFee;
    }

    /**
     * @param float $wirelessFee
     */
    public function setWirelessFee(float $wirelessFee): void
    {
        $this->wirelessFee = $wirelessFee;
    }

    /**
     * @return bool
     */
    public function isDuesAndAssessmentsFlg(): bool
    {
        return $this->duesAndAssessmentsFlg;
    }

    /**
     * @param bool $duesAndAssessmentsFlg
     */
    public function setDuesAndAssessmentsFlg(bool $duesAndAssessmentsFlg): void
    {
        $this->duesAndAssessmentsFlg = $duesAndAssessmentsFlg;
    }

    /**
     * @return bool
     */
    public function isPassthruInterchgCostsFlg(): bool
    {
        return $this->passthruInterchgCostsFlg;
    }

    /**
     * @param bool $passthruInterchgCostsFlg
     */
    public function setPassthruInterchgCostsFlg(bool $passthruInterchgCostsFlg): void
    {
        $this->passthruInterchgCostsFlg = $passthruInterchgCostsFlg;
    }
}
