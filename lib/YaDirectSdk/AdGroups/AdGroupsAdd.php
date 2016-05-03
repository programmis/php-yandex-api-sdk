<?php

namespace YaDirectSdk\AdGroups;


use YaDirectSdk\AdGroups\Includes\AdGroup;
use YaDirectSdk\Includes\Request;

class AdGroupsAdd extends Request
{

    /**
     * @var array $adGroups
     */
    private $adGroups = [];

    public function doRequest()
    {
        $this->setMethod('adgroups.add');

        $this->setParameter('params', [
            'AdGroups' => $this->getAdGroupsInArray()
        ]);

        $this->execApi();
    }

    /**
     * @return array
     */
    public function getAdGroups()
    {
        return $this->adGroups;
    }

    /**
     * @param AdGroup $adGroups
     * @return AdGroupsAdd
     */
    public function addAdGroup($adGroup)
    {
        $this->adGroups[] = $adGroup;
        return $this;
    }


    private function getAdGroupsInArray(){
        $adGroups = [];

        /**
         * @var AdGroup $adGroup
         */
        foreach ($this->getAdGroups() as $adGroup){
            $adGroups[] = $adGroup->getJsonData();
        }

        return $adGroups;
    }

}