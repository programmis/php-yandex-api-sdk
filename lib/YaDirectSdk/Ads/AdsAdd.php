<?php

namespace YaDirectSdk\Ads;


use YaDirectSdk\Ads\Includes\Ad;
use YaDirectSdk\Includes\Request;

class AdsAdd extends Request
{
    /**
     * @var array $ads
     */
    private $ads = [];

    public function doRequest()
    {
        $this->setMethod('ads.add');

        $this->setParameter('params', [
            'Ads' => $this->getAdsInArray()
        ]);

        $result = $this->execApi();
		return $result;
    }

    /**
     * @return array
     */
    public function getAds()
    {
        return $this->ads;
    }

    /**
     * @param Ad $ad
     * @return AdsAdd
     */
    public function addAd($ad)
    {
        $this->ads[] = $ad;
        return $this;
    }

    protected function getAdsInArray()
    {
        $ads = [];

        /**
         * @var Ad $ad
         */
        foreach ($this->getAds() as $ad) {
            $ads[] = $ad->getJsonData();
        }

        return $ads;
    }

}