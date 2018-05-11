<?php

namespace Guesl\CardConnect\CoPilot\Models;

class CustomField extends Model
{
    /**
     * The index of the custom field being set. Must be a number between 1-10
     * Required: yes
     *
     * @var int
     */
    protected $userFieldNumber;

    /**
     * Required if the merchant's partner has made the custom field at this index required
     * Required: yes
     * Size: 100
     *
     * @var int
     */
    protected $customFieldValue;

    /**
     * @return int
     */
    public function getUserFieldNumber(): int
    {
        return $this->userFieldNumber;
    }

    /**
     * @param int $userFieldNumber
     */
    public function setUserFieldNumber(int $userFieldNumber): void
    {
        $this->userFieldNumber = $userFieldNumber;
    }

    /**
     * @return int
     */
    public function getCustomFieldValue(): int
    {
        return $this->customFieldValue;
    }

    /**
     * @param int $customFieldValue
     */
    public function setCustomFieldValue(int $customFieldValue): void
    {
        $this->customFieldValue = $customFieldValue;
    }
}
