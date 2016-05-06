<?php

namespace YaDirectSdk\Campaigns;


use YaDirectSdk\Includes\Request;

class CampaignsGet extends Request
{

    public function doRequest()
    {
        $this->setMethod('campaigns.get');

        $this->setParameter('params',
            [
                'SelectionCriteria' => (object)array(),
                "FieldNames" => [
                    "Id",
                    "Name",
                    "DailyBudget",
                    "Funds",
                    "Statistics",
                    "Type"
                ]
            ]
        );

        $result = $this->execApi();
		return $result;
    }

}