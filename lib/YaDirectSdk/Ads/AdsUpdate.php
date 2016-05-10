<?php

namespace YaDirectSdk\Ads;


class AdsUpdate extends AdsAdd
{

    public function doRequest()
    {
        $this->setMethod('ads.update');

        $this->setParameter('params', [
            'Ads' => $this->getAdsInArray()
        ]);

        $result = $this->execApi();
        return $result;
    }
    
}