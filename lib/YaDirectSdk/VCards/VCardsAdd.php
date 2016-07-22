<?php

namespace YaDirectSdk\VCards;


use YaDirectSdk\Includes\Request;
use YaDirectSdk\VCards\Includes\VCard;

class VCardsAdd extends Request
{

    /**
     * @var array $vCards
     */
    private $vCards = [];

    public function doRequest()
    {
        $this->setMethod('vcards.add');

        $this->setParameter('params', [
            'VCards' => $this->getVCardsInArray()
        ]);

        $result = $this->execApi();
        return $result;
    }

    /**
     * @return array
     */
    public function getVCards()
    {
        return $this->vCards;
    }

    /**
     * @param VCard $vCard
     * @return $this
     */
    public function addVCard($vCard)
    {
        $this->vCards[] = $vCard;
        return $this;
    }

    protected function getVCardsInArray()
    {
        $VCards = [];

        /**
         * @var VCard $VCard
         */
        foreach ($this->getVCards() as $VCard) {
            $VCards[] = $VCard->getJsonData();
        }

        return $VCards;
    }
}