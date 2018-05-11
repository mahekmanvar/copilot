<?php

namespace Guesl\CardConnect\CoPilot\Models;

class Equipment extends Model
{
    /**
     * The equipment ID
     * Size: 60
     *
     * @var int
     */
    protected $equipmentId;

    /**
     * The equipment name
     * Size: 60
     *
     * @var string
     */
    protected $equipmentName;

    /**
     * The equipment description
     * Size: 60
     *
     * @var string
     */
    protected $description;

    /**
     * The equipment make
     * Size: 60
     *
     * @var string
     */
    protected $make;

    /**
     * The equipment model
     * Size: 60
     *
     * @var string
     */
    protected $model;

    /**
     * The equipment image url
     * Size: 60
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * The equipment sku
     * Required: yes
     * Size: 60
     *
     * @var string
     */
    protected $sku;

    /**
     * The equipment platform
     * Size: 60
     *
     * @var string
     */
    protected $platformCd;

    /**
     * The equipment type
     * https://developer.cardconnect.com/copilotapi#equipment-type-enumeration-definition
     *
     * "Terminal", "Gateway", or "Software".
     *
     * @var string
     */
    protected $equipmentTypeCd;

    /**
     * The equipment supplier code
     * https://developer.cardconnect.com/copilotapi#equipment-supplier-codes
     *
     * "First Data Marketplace", "CardConnect", "Thirdparty", "TMS".
     *
     * @var string
     */
    protected $quipmentSupplierCd;

    /**
     * The default one time price
     * Size: 60
     *
     * @var string
     */
    protected $defaultPrice;

    /**
     * The default monthly price if allowed
     * Size: 60
     *
     * @var string
     */
    protected $defaultPlanPrice;

    /**
     * True if monthly billing is allowed
     * Size: 60
     *
     * @var string
     */
    protected $allowCustomBillingFlg;

    /**
     * The standard shipping price (per unit)
     * Size: 60
     *
     * @var string
     */
    protected $standardShippingPrice;

    /**
     * The expedited shipping price (per unit)
     * Size: 60
     *
     * @var string
     */
    protected $expeditedShippingPrice;

    /**
     * @return int
     */
    public function getEquipmentId(): int
    {
        return $this->equipmentId;
    }

    /**
     * @param int $equipmentId
     */
    public function setEquipmentId(int $equipmentId): void
    {
        $this->equipmentId = $equipmentId;
    }

    /**
     * @return string
     */
    public function getEquipmentName(): string
    {
        return $this->equipmentName;
    }

    /**
     * @param string $equipmentName
     */
    public function setEquipmentName(string $equipmentName): void
    {
        $this->equipmentName = $equipmentName;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param string $make
     */
    public function setMake(string $make): void
    {
        $this->make = $make;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getPlatformCd(): string
    {
        return $this->platformCd;
    }

    /**
     * @param string $platformCd
     */
    public function setPlatformCd(string $platformCd): void
    {
        $this->platformCd = $platformCd;
    }

    /**
     * @return string
     */
    public function getEquipmentTypeCd(): string
    {
        return $this->equipmentTypeCd;
    }

    /**
     * @param string $equipmentTypeCd
     */
    public function setEquipmentTypeCd(string $equipmentTypeCd): void
    {
        $this->equipmentTypeCd = $equipmentTypeCd;
    }

    /**
     * @return string
     */
    public function getQuipmentSupplierCd(): string
    {
        return $this->quipmentSupplierCd;
    }

    /**
     * @param string $quipmentSupplierCd
     */
    public function setQuipmentSupplierCd(string $quipmentSupplierCd): void
    {
        $this->quipmentSupplierCd = $quipmentSupplierCd;
    }

    /**
     * @return string
     */
    public function getDefaultPrice(): string
    {
        return $this->defaultPrice;
    }

    /**
     * @param string $defaultPrice
     */
    public function setDefaultPrice(string $defaultPrice): void
    {
        $this->defaultPrice = $defaultPrice;
    }

    /**
     * @return string
     */
    public function getDefaultPlanPrice(): string
    {
        return $this->defaultPlanPrice;
    }

    /**
     * @param string $defaultPlanPrice
     */
    public function setDefaultPlanPrice(string $defaultPlanPrice): void
    {
        $this->defaultPlanPrice = $defaultPlanPrice;
    }

    /**
     * @return string
     */
    public function getAllowCustomBillingFlg(): string
    {
        return $this->allowCustomBillingFlg;
    }

    /**
     * @param string $allowCustomBillingFlg
     */
    public function setAllowCustomBillingFlg(string $allowCustomBillingFlg): void
    {
        $this->allowCustomBillingFlg = $allowCustomBillingFlg;
    }

    /**
     * @return string
     */
    public function getStandardShippingPrice(): string
    {
        return $this->standardShippingPrice;
    }

    /**
     * @param string $standardShippingPrice
     */
    public function setStandardShippingPrice(string $standardShippingPrice): void
    {
        $this->standardShippingPrice = $standardShippingPrice;
    }

    /**
     * @return string
     */
    public function getExpeditedShippingPrice(): string
    {
        return $this->expeditedShippingPrice;
    }

    /**
     * @param string $expeditedShippingPrice
     */
    public function setExpeditedShippingPrice(string $expeditedShippingPrice): void
    {
        $this->expeditedShippingPrice = $expeditedShippingPrice;
    }
}
