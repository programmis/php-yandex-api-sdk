<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Strategy;


use YaDirectSdk\Campaigns\Includes\Types\Text\Strategy\Network\TextCampaignNetworkStrategy;
use YaDirectSdk\Campaigns\Includes\Types\Text\Strategy\Search\TextCampaignSearchStrategy;
use YaDirectSdk\Includes\JsonData;

class TextCampaignStrategy
{
    use JsonData;

    /**
     * @var TextCampaignSearchStrategy $search
     */
    private $search;

    /**
     * @var TextCampaignNetworkStrategy $network
     */
    private $network;

    /**
     * @return TextCampaignSearchStrategy
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param TextCampaignSearchStrategy $search
     * @return $this
     */
    public function setSearch($search)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @return TextCampaignNetworkStrategy
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param TextCampaignNetworkStrategy $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }

}