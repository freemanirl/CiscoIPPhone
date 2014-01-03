<?php

namespace CiscoIPPhone;

/**
 * Class CiscoIPPhoneImage
 * @package CiscoIPPhone
 */
class CiscoIPPhoneImage
{
    /**
     * @var integer
     */
    protected $locationX;

    /**
     * @var integer
     */
    protected $locationY;

    /**
     * @var integer
     */
    protected $width;

    /**
     * @var integer
     */
    protected $height;

    /**
     * @var integer
     */
    protected $depth;

    protected $data;

    protected $prompt;

    /**
     * @param $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $depth
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $locationX
     * @return $this
     */
    public function setLocationX($locationX)
    {
        $this->locationX = $locationX;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationX()
    {
        return $this->locationX;
    }

    /**
     * @param $locationY
     * @return $this
     */
    public function setLocationY($locationY)
    {
        $this->locationY = $locationY;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationY()
    {
        return $this->locationY;
    }

    /**
     * @param $prompt
     * @return $this
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * @param $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
}