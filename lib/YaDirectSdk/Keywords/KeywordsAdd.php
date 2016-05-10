<?php

namespace YaDirectSdk\Keywords;


use YaDirectSdk\Includes\Request;
use YaDirectSdk\Keywords\Includes\Keyword;

class KeywordsAdd extends Request
{

    /**
     * @var array $keywords
     */
    private $keywords = [];

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
     * @param Keyword $keyword
     * @return $this
     */
    public function addKeyword($keyword)
    {
        $this->keywords[] = $keyword;
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