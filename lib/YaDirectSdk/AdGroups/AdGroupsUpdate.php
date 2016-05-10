<?php

namespace YaDirectSdk\AdGroups;


class AdGroupsUpdate extends AdGroupsAdd
{

    public function doRequest()
    {
        $this->setMethod('adgroups.update');

        $this->setParameter('params', [
            'AdGroups' => $this->getAdGroupsInArray()
        ]);

        $result = $this->execApi();
        return $result;
    }
    
}