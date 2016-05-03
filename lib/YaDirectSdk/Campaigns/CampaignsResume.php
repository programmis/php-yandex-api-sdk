<?php

namespace YaDirectSdk\Campaigns;


use YaDirectSdk\Includes\Request;

class CampaignsResume extends Request
{

    private $Ids = [];

    public function doRequest()
    {
        $this->setMethod('campaigns.resume');

        $this->setParameter('params',
            [
                'SelectionCriteria' => [
                    "Ids" => $this->Ids
                ]
            ]
        );

        $this->execApi();
    }

    /**
     * @return array
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * @param integer $Id
     * @return $this
     */
    public function addId($Id)
    {
        $this->Ids[] = $Id;
        return $this;
    }

}