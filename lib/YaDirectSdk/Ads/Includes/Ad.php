<?php

namespace YaDirectSdk\Ads\Includes;


use YaDirectSdk\Ads\Includes\Types\Dynamic\DynamicTextAd;
use YaDirectSdk\Ads\Includes\Types\Mobile\MobileAppAd;
use YaDirectSdk\Ads\Includes\Types\Text\TextAd;
use YaDirectSdk\Includes\JsonData;

class Ad
{

    use JsonData;

    /**
     * @var integer $id
     */
    private $id;
    
    /**
     * @var TextAd $textAd
     */
    private $textAd;

    /**
     * @var DynamicTextAd $dynamicTextAd
     */
    private $dynamicTextAd;

    /**
     * @var MobileAppAd $mobileAppAd
     */
    private $mobileAppAd;

    /**
     * @var integer $adGroupId
     */
    private $adGroupId;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return TextAd
     */
    public function getTextAd()
    {
        return $this->textAd;
    }

    /**
     * @param TextAd $textAd
     * @return Ad
     */
    public function setTextAd($textAd)
    {
        $this->textAd = $textAd;
        return $this;
    }

    /**
     * @return DynamicTextAd
     */
    public function getDynamicTextAd()
    {
        return $this->dynamicTextAd;
    }

    /**
     * @param DynamicTextAd $dynamicTextAd
     * @return Ad
     */
    public function setDynamicTextAd($dynamicTextAd)
    {
        $this->dynamicTextAd = $dynamicTextAd;
        return $this;
    }

    /**
     * @return MobileAppAd
     */
    public function getMobileAppAd()
    {
        return $this->mobileAppAd;
    }

    /**
     * @param MobileAppAd $mobileAppAd
     * @return Ad
     */
    public function setMobileAppAd($mobileAppAd)
    {
        $this->mobileAppAd = $mobileAppAd;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return Ad
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId = $adGroupId;
        return $this;
    }

}