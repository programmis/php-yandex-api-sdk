<?php

namespace YaDirectSdk\VCards\Includes;


use YaDirectSdk\Includes\JsonData;

class Phone
{

    use JsonData;

    /**
     * @var string $countryCode
     */
    private $countryCode;

    /**
     * @var string $cityCode
     */
    private $cityCode;

    /**
     * @var string $phoneNumber
     */
    private $phoneNumber;

    /**
     * @var string $extension
     */
    private $extension;

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param string $cityCode
     * @return $this
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }
    
}