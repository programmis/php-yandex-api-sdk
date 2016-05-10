<?php

namespace YaDirectSdk\Campaigns;


class CampaignsUpdate extends CampaingsAdd
{

    public function doRequest()
    {
        $this->setMethod('campaigns.update');

        $this->setParameter('params', [
            'Campaigns' => $this->getCampaignsInArray()
        ]);

        $result = $this->execApi();
        return $result;
    }    
    
}