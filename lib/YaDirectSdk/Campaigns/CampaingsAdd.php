<?php

namespace YaDirectSdk\Campaigns;


use YaDirectSdk\Campaigns\Includes\Campaign;
use YaDirectSdk\Includes\Request;

class CampaingsAdd extends Request
{

    /**
     * @var array $campaigns
     */
    private $campaigns = [];

    public function doRequest()
    {
        $this->setMethod('campaigns.add');

        $this->setParameter('params', [
            'Campaigns' => $this->getCampaignsInArray()
        ]);

        $result = $this->execApi();
		return $result;
    }

    /**
     * @param Campaign $campaign
     * @return $this
     */
    public function addCampaign($campaign)
    {
        $this->campaigns[] = $campaign;
        return $this;
    }

    public function getCampaigns()
    {
        return $this->campaigns;
    }

    private function getCampaignsInArray()
    {
        $campaigns = [];

        /**
         * @var Campaign $campaign
         */
        foreach ($this->getCampaigns() as $campaign) {
            $campaigns[] = $campaign->getJsonData();
        }

        return $campaigns;
    }

}