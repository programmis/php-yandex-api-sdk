<?php

namespace YaDirectSdk\Dictionaries;


use YaDirectSdk\Dictionaries\Includes\DictionaryNameEnum;
use YaDirectSdk\Includes\Request;

class DictionariesGet extends Request
{

    private $dictionaryNames = [];

    public function doRequest()
    {
        $this->setMethod('dictionaries.get');

        $this->setParameter('params',
            [
                'DictionaryNames' => $this->getDictionaryNames()
            ]
        );

        $this->execApi();
    }

    /**
     * @return array
     */
    public function getDictionaryNames()
    {
        return $this->dictionaryNames;
    }

    /**
     * @param string $dictionaryName
     * @return DictionariesGet
     */
    public function addDictionaryName($dictionaryName)
    {
        $this->dictionaryNames[] = $dictionaryName;
        return $this;
    }

}