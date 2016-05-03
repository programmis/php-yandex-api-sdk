<?php

namespace YaDirectSdk\Ads;


use YaDirectSdk\Includes\Request;

class AdsDelete extends Request
{

    private $Ids = [];

    public function doRequest()
    {
        $this->setMethod('ads.delete');

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