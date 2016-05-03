<?php

namespace YaDirectSdk\AdGroups\Includes;


use YaDirectSdk\AdGroups\Includes\Types\Dynamic\DynamicTextAdGroup;
use YaDirectSdk\AdGroups\Includes\Types\Mobile\MobileAppAdGroup;
use YaDirectSdk\Includes\JsonData;

class AdGroup
{

    use JsonData;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var integer $campaignId
     */
    private $campaignId;

    /**
     * @var array $regionIds
     */
    private $regionIds;

    /**
     * @var array $negativeKeywords
     */
    private $negativeKeywords;

    /**
     * @var string $trackingParams
     */
    private $trackingParams;

    /**
     * @var MobileAppAdGroup $mobileAppAdGroup
     */
    private $mobileAppAdGroup;

    /**
     * @var DynamicTextAdGroup $dynamicTextAdGroup
     */
    private $dynamicTextAdGroup;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return AdGroup
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return AdGroup
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return array
     */
    public function getRegionIds()
    {
        return $this->regionIds;
    }

    /**
     * @param integer $regionId
     * @return AdGroup
     */
    public function addRegionId($regionId)
    {
        $this->regionIds[] = $regionId;
        return $this;
    }

    /**
     * @return array
     */
    public function getNegativeKeywords()
    {
        return $this->negativeKeywords;
    }

    /**
     * @param string $negativeKeyword
     * @return AdGroup
     */
    public function addNegativeKeyword($negativeKeyword)
    {
        $this->negativeKeywords[] = $negativeKeyword;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingParams()
    {
        return $this->trackingParams;
    }

    /**
     * @param string $trackingParams
     * @return AdGroup
     */
    public function setTrackingParams($trackingParams)
    {
        $this->trackingParams = $trackingParams;
        return $this;
    }

    /**
     * @return MobileAppAdGroup
     */
    public function getMobileAppAdGroup()
    {
        return $this->mobileAppAdGroup;
    }

    /**
     * @param MobileAppAdGroup $mobileAppAdGroup
     * @return AdGroup
     */
    public function setMobileAppAdGroup($mobileAppAdGroup)
    {
        $this->mobileAppAdGroup = $mobileAppAdGroup;
        return $this;
    }

    /**
     * @return DynamicTextAdGroup
     */
    public function getDynamicTextAdGroup()
    {
        return $this->dynamicTextAdGroup;
    }

    /**
     * @param DynamicTextAdGroup $dynamicTextAdGroup
     * @return AdGroup
     */
    public function setDynamicTextAdGroup($dynamicTextAdGroup)
    {
        $this->dynamicTextAdGroup = $dynamicTextAdGroup;
        return $this;
    }

}