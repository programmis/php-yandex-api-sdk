<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text;


use YaDirectSdk\Campaigns\Includes\Types\Text\Keywords\RelevantKeywordsSetting;
use YaDirectSdk\Campaigns\Includes\Types\Text\Settings\TextCampaignSettings;
use YaDirectSdk\Campaigns\Includes\Types\Text\Strategy\TextCampaignStrategy;
use YaDirectSdk\Includes\JsonData;

class TextCampaign
{
    use JsonData;

    /**
     * @var array $settings
     */
    private $settings;

    /**
     * @var array $counterIds
     */
    private $counterIds;

    /**
     * @var RelevantKeywordsSetting $relevantKeywords
     */
    private $relevantKeywords;

    /**
     * @var TextCampaignStrategy $biddingStrategy
     */
    private $biddingStrategy;

    /**
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param TextCampaignSettings $setting
     * @return $this
     */
    public function addSetting($setting)
    {
        $this->settings[] = $setting;
        return $this;
    }

    /**
     * @return array
     */
    public function getCounterIds()
    {
        return $this->counterIds;
    }

    /**
     * @param array $counterIds
     * @return $this
     */
    public function setCounterIds($counterIds)
    {
        $this->counterIds = $counterIds;
        return $this;
    }

    /**
     * @return RelevantKeywordsSetting
     */
    public function getRelevantKeywords()
    {
        return $this->relevantKeywords;
    }

    /**
     * @param RelevantKeywordsSetting $relevantKeywords
     * @return $this
     */
    public function setRelevantKeywords($relevantKeywords)
    {
        $this->relevantKeywords = $relevantKeywords;
        return $this;
    }

    /**
     * @return TextCampaignStrategy
     */
    public function getBiddingStrategy()
    {
        return $this->biddingStrategy;
    }

    /**
     * @param TextCampaignStrategy $biddingStrategy
     * @return $this
     */
    public function setBiddingStrategy($biddingStrategy)
    {
        $this->biddingStrategy = $biddingStrategy;
        return $this;
    }
    
}