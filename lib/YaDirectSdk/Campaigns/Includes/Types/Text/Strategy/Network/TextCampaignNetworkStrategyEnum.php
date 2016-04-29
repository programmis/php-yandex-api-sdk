<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Strategy\Network;


abstract class TextCampaignNetworkStrategyEnum
{

    const NETWORK_DEFAULT = 'NETWORK_DEFAULT';
    const MAXIMUM_COVERAGE = 'MAXIMUM_COVERAGE';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPA = 'AVERAGE_CPA';
    const AVERAGE_ROI = 'AVERAGE_ROI';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    const SERVING_OFF = 'SERVING_OFF';

    abstract public function setBiddingStrategyType($biddingStrategyType /** @var string (TextCampaignNetworkStrategyEnum const) */);

}