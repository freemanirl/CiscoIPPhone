<?php

namespace CiscoIPPhone;

/**
 * Class ExecuteCollection
 * @package CiscoIPPhone
 */
class ExecuteCollection
{
    /**
     * @var array
     */
    protected $executeItems = [];

    /**
     * @param $executeItems
     * @return $this
     */
    public function setExecuteItems($executeItems)
    {
        $this->executeItems = $executeItems;
        return $this;
    }

    /**
     * @return array
     */
    public function getExecuteItems()
    {
        return $this->executeItems;
    }

    /**
     * @param ExecuteItem $executeItem
     * @return $this
     */
    public function addExecuteItem(ExecuteItem $executeItem)
    {
        $this->executeItems[] = $executeItem;
        return $this;
    }
}