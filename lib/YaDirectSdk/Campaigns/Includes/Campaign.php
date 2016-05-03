<?php

namespace YaDirectSdk\Campaigns\Includes;


use YaDirectSdk\Campaigns\Includes\Types\Dynamic\DynamicTextCampaign;
use YaDirectSdk\Campaigns\Includes\Types\Mobile\MobileAppCampaign;
use YaDirectSdk\Campaigns\Includes\Types\Text\TextCampaign;
use YaDirectSdk\Includes\JsonData;

class Campaign
{

    use JsonData;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $startDate
     */
    private $startDate;

    /**
     * @var DailyBudget $dailyBudget
     */
    private $dailyBudget;

    /**
     * @var string $name
     */
    private $endDate;

    /**
     * @var array $negativeKeywords
     */
    private $negativeKeywords;

    /**
     * @var array $blockedIps
     */
    private $blockedIps;

    /**
     * @var array $excludedSites
     */
    private $excludedSites;

    /**
     * @var TextCampaign $textCampaign
     */
    private $textCampaign;

    /**
     * @var MobileAppCampaign $mobileAppCampaign
     */
    private $mobileAppCampaign;

    /**
     * @var DynamicTextCampaign $dynamicTextCampaign
     */
    private $dynamicTextCampaign;

    /**
     * @var string $clientInfo
     */
    private $clientInfo;

    /**
     * @var TimeTargeting $timeTargeting
     */
    private $timeTargeting;

    /**
     * @var string $timeZone
     */
    private $timeZone;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DailyBudget
     */
    public function getDailyBudget()
    {
        return $this->dailyBudget;
    }

    /**
     * @param DailyBudget $dailyBudget
     * @return $this
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->dailyBudget = $dailyBudget;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return $this
     */
    public function addNegativeKeyword($negativeKeyword)
    {
        $this->negativeKeywords[] = $negativeKeyword;
        return $this;
    }

    /**
     * @return array
     */
    public function getBlockedIps()
    {
        return $this->blockedIps;
    }

    /**
     * @param string $blockedIp
     * @return $this
     */
    public function addBlockedIp($blockedIp)
    {
        $this->blockedIps[] = $blockedIp;
        return $this;
    }

    /**
     * @return array
     */
    public function getExcludedSites()
    {
        return $this->excludedSites;
    }

    /**
     * @param string $excludedSite
     * @return $this
     */
    public function addExcludedSite($excludedSite)
    {
        $this->excludedSites[] = $excludedSite;
        return $this;
    }

    /**
     * @return TextCampaign
     */
    public function getTextCampaign()
    {
        return $this->textCampaign;
    }

    /**
     * @param TextCampaign $textCampaign
     * @return $this
     */
    public function setTextCampaign($textCampaign)
    {
        $this->textCampaign = $textCampaign;
        return $this;
    }

    /**
     * @return MobileAppCampaign
     */
    public function getMobileAppCampaign()
    {
        return $this->mobileAppCampaign;
    }

    /**
     * @param MobileAppCampaign $mobileAppCampaign
     * @return $this
     */
    public function setMobileAppCampaign($mobileAppCampaign)
    {
        $this->mobileAppCampaign = $mobileAppCampaign;
        return $this;
    }

    /**
     * @return DynamicTextCampaign
     */
    public function getDynamicTextCampaign()
    {
        return $this->dynamicTextCampaign;
    }

    /**
     * @param DynamicTextCampaign $dynamicTextCampaign
     * @return $this
     */
    public function setDynamicTextCampaign($dynamicTextCampaign)
    {
        $this->dynamicTextCampaign = $dynamicTextCampaign;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientInfo()
    {
        return $this->clientInfo;
    }

    /**
     * @param string $clientInfo
     * @return $this
     */
    public function setClientInfo($clientInfo)
    {
        $this->clientInfo = $clientInfo;
        return $this;
    }

    /**
     * @return TimeTargeting
     */
    public function getTimeTargeting()
    {
        return $this->timeTargeting;
    }

    /**
     * @param TimeTargeting $timeTargeting
     * @return $this
     */
    public function setTimeTargeting($timeTargeting)
    {
        $this->timeTargeting = $timeTargeting;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

}