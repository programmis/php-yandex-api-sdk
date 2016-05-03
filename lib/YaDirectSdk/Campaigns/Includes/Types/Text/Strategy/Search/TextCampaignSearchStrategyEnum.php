<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Strategy\Search;


abstract class TextCampaignSearchStrategyEnum
{

    const HIGHEST_POSITION = 'HIGHEST_POSITION';
    const LOWEST_COST = 'LOWEST_COST';
    const LOWEST_COST_PREMIUM = 'LOWEST_COST_PREMIUM';
    const LOWEST_COST_GUARANTEE = 'LOWEST_COST_GUARANTEE';
    const IMPRESSIONS_BELOW_SEARCH = 'IMPRESSIONS_BELOW_SEARCH';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPA = 'AVERAGE_CPA';
    const AVERAGE_ROI = 'AVERAGE_ROI';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    const SERVING_OFF = 'SERVING_OFF';
    
    abstract public function setBiddingStrategyType(
        $biddingStrategyType/** @var string (TextCampaignSearchStrategyEnum const) */
    );

}