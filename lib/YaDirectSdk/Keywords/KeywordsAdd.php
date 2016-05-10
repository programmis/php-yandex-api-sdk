<?php

namespace YaDirectSdk\Keywords;


use YaDirectSdk\Includes\Request;
use YaDirectSdk\Keywords\Includes\Keyword;

class KeywordsAdd extends Request
{

    private $keywords;

    public function doRequest()
    {
        $this->setMethod('keywords.add');

        $this->setParameter('params', [
            'Keywords' => $this->getKeywordsInArray()
        ]);

        $result = $this->execApi();
        return $result;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    protected function getKeywordsInArray()
    {
        $keywords = [];

        /**
         * @var Keyword $keyword
         */
        foreach ($this->getKeywords() as $keyword) {
            $keywords[] = $keyword->getJsonData();
        }

        return $keywords;
    }    
}