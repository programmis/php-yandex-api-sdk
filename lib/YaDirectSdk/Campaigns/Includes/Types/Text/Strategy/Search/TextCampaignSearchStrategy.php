<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Strategy\Search;


use YaDirectSdk\Campaigns\Includes\Types\Strategy\CampaignStrategyTrait;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyAverageCpa;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyAverageCpc;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyAverageRoi;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyMaximumClicks;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyMaximumConversionRate;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyWeeklyClickPackage;
use YaDirectSdk\Campaigns\Includes\Types\Text\Strategy\TextCampaignStrategyTrait;
use YaDirectSdk\Includes\JsonData;

class TextCampaignSearchStrategy extends TextCampaignSearchStrategyEnum
{

    use JsonData;
    use CampaignStrategyTrait;
    use TextCampaignStrategyTrait;

    /**
     * @var string $biddingStrategyType
     */
    private $biddingStrategyType;


    public function setBiddingStrategyType(
        $biddingStrategyType/** @var string (TextCampaignSearchStrategyEnum const) */
    )
    {
        $this->biddingStrategyType = $biddingStrategyType;
        return $this;
    }

    /**
     * @return StrategyAverageRoi
     */
    public function getAverageRoi()
    {
        return $this->averageRoi;
    }

    /**
     * @param StrategyAverageRoi $averageRoi
     * @return $this
     */
    public function setAverageRoi($averageRoi)
    {
        $this->averageRoi = $averageRoi;
        return $this;
    }

    /**
     * @return StrategyAverageCpa
     */
    public function getAverageCpa()
    {
        return $this->averageCpa;
    }

    /**
     * @param StrategyAverageCpa $averageCpa
     * @return $this
     */
    public function setAverageCpa($averageCpa)
    {
        $this->averageCpa = $averageCpa;
        return $this;
    }

    /**
     * @return StrategyMaximumConversionRate
     */
    public function getWbMaximumConversionRate()
    {
        return $this->wbMaximumConversionRate;
    }

    /**
     * @param StrategyMaximumConversionRate $wbMaximumConversionRate
     * @return $this
     */
    public function setWbMaximumConversionRate($wbMaximumConversionRate)
    {
        $this->wbMaximumConversionRate = $wbMaximumConversionRate;
        return $this;
    }

    /**
     * @return StrategyWeeklyClickPackage
     */
    public function getWeeklyClickPackage()
    {
        return $this->weeklyClickPackage;
    }

    /**
     * @param StrategyWeeklyClickPackage $weeklyClickPackage
     * @return $this
     */
    public function setWeeklyClickPackage($weeklyClickPackage)
    {
        $this->weeklyClickPackage = $weeklyClickPackage;
        return $this;
    }

    /**
     * @return StrategyAverageCpc
     */
    public function getAverageCpc()
    {
        return $this->averageCpc;
    }

    /**
     * @param StrategyAverageCpc $averageCpc
     * @return $this
     */
    public function setAverageCpc($averageCpc)
    {
        $this->averageCpc = $averageCpc;
        return $this;
    }

    /**
     * @return StrategyMaximumClicks
     */
    public function getWbMaximumClicks()
    {
        return $this->wbMaximumClicks;
    }

    /**
     * @param StrategyMaximumClicks $wbMaximumClicks
     * @return $this
     */
    public function setWbMaximumClicks($wbMaximumClicks)
    {
        $this->wbMaximumClicks = $wbMaximumClicks;
        return $this;
    }

}