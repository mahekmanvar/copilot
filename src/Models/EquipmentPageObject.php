<?php

namespace Guesl\CardConnect\CoPilot\Models;

class EquipmentPageObject extends Model
{
    /**
     * @var array
     */
    protected $rows;

    /**
     * @var int
     */
    protected $totalServerItemsCount;

    /**
     * @var int
     */
    protected $totalDisplayItemsCount;

    /**
     * @var bool
     */
    protected $moreRowsAvailable;

    /**
     * Required: yes
     * size: 1000
     *
     * @var mixed
     */
    protected $columnSums;

    /**
     * @return array
     */
    public function getRows(): array
    {
        return $this->rows;
    }

    /**
     * @param array $rows
     */
    public function setRows(array $rows): void
    {
        $this->rows = $rows;
    }

    /**
     * @return int
     */
    public function getTotalServerItemsCount(): int
    {
        return $this->totalServerItemsCount;
    }

    /**
     * @param int $totalServerItemsCount
     */
    public function setTotalServerItemsCount(int $totalServerItemsCount): void
    {
        $this->totalServerItemsCount = $totalServerItemsCount;
    }

    /**
     * @return int
     */
    public function getTotalDisplayItemsCount(): int
    {
        return $this->totalDisplayItemsCount;
    }

    /**
     * @param int $totalDisplayItemsCount
     */
    public function setTotalDisplayItemsCount(int $totalDisplayItemsCount): void
    {
        $this->totalDisplayItemsCount = $totalDisplayItemsCount;
    }

    /**
     * @return bool
     */
    public function isMoreRowsAvailable(): bool
    {
        return $this->moreRowsAvailable;
    }

    /**
     * @param bool $moreRowsAvailable
     */
    public function setMoreRowsAvailable(bool $moreRowsAvailable): void
    {
        $this->moreRowsAvailable = $moreRowsAvailable;
    }

    /**
     * @return mixed
     */
    public function getColumnSums()
    {
        return $this->columnSums;
    }

    /**
     * @param mixed $columnSums
     */
    public function setColumnSums($columnSums): void
    {
        $this->columnSums = $columnSums;
    }

    protected function populateDefinition($name, $newValue, $oldValue)
    {
        if ("rows" == $name) {
            $rows = [];
            foreach ($newValue as $equipmentArray) {
                $equipment = (new Equipment())->populate($equipmentArray);
                array_push($rows, $equipment);
            }

            $this->rows = $rows;
        }
    }
}
