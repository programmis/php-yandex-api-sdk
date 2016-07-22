<?php

namespace YaDirectSdk\AdGroups;


use YaDirectSdk\Includes\Request;

class AdGroupsGet extends Request
{

    private $CampaignIds = [];

    public function doRequest()
    {
        $this->setMethod('adgroups.get');

        $this->setParameter('params',
            [
                'SelectionCriteria' => [
                    "CampaignIds" => $this->getCampaignIds()
                ],
                'FieldNames' => [
                    'Id'
                ]
            ]
        );

        $result = $this->execApi();
		return $result;
    }

    /**
     * @return array
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * @param integer $CampaignIds
     * @return AdGroupsGet
     */
    public function addCampaignId($CampaignId)
    {
        $this->CampaignIds[] = $CampaignId;
        return $this;
    }

}