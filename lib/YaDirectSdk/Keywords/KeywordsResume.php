<?php

namespace YaDirectSdk\Keywords;


use YaDirectSdk\Includes\Request;

class KeywordsResume extends Request
{

    private $Ids = [];

    public function doRequest()
    {
        $this->setMethod('keywords.resume');

        $this->setParameter('params',
            [
                'SelectionCriteria' => [
                    "Ids" => $this->Ids
                ]
            ]
        );

        $result = $this->execApi();
        return $result;
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