<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Strategy;


use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyAverageCpa;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyAverageRoi;
use YaDirectSdk\Campaigns\Includes\Types\Strategy\StrategyMaximumConversionRate;

trait TextCampaignStrategyTrait
{

    /**
     * @var StrategyMaximumConversionRate $wbMaximumConversionRate
     */
    private $wbMaximumConversionRate;

    /**
     * @var StrategyAverageCpa $averageCpa
     */
    private $averageCpa;

    /**
     * @var StrategyAverageRoi $averageRoi
     */
    private $averageRoi;

}