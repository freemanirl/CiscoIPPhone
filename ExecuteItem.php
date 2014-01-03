<?php

namespace CiscoIPPhone;

/**
 * Class ExecuteItem
 * @package CiscoIPPhone
 */
class ExecuteItem
{
    /**
     * @var integer
     */
    protected $priority;

    /**
     * @var string
     */
    protected $url;

    /**
     * @param $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}