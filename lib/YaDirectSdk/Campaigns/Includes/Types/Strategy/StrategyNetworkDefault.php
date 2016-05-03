<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Strategy;


use YaDirectSdk\Includes\JsonData;

class StrategyNetworkDefault
{

    use JsonData;

    /**
     * @var integer $limitPercent
     */
    private $limitPercent;

    /**
     * @var integer $bidPercent
     */
    private $bidPercent;

    /**
     * @return int
     */
    public function getLimitPercent()
    {
        return $this->limitPercent;
    }

    /**
     * @param int $limitPercent
     * @return $this
     */
    public function setLimitPercent($limitPercent)
    {
        $this->limitPercent = $limitPercent;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidPercent()
    {
        return $this->bidPercent;
    }

    /**
     * @param int $bidPercent
     * @return $this
     */
    public function setBidPercent($bidPercent)
    {
        $this->bidPercent = $bidPercent;
        return $this;
    }

}