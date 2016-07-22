<?php

namespace YaDirectSdk\Keywords;


class KeywordsUpdate extends KeywordsAdd
{
    public function doRequest()
    {
        $this->setMethod('keywords.update');

        $this->setParameter('params', [
            'Keywords' => $this->getKeywordsInArray()
        ]);

        $result = $this->execApi();
        return $result;
    }
}