<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Strategy;


use YaDirectSdk\Includes\JsonData;

class StrategyAverageCpc
{

    use JsonData;

    /**
     * @var integer $averageCpc
     */
    private $averageCpc;

    /**
     * @var integer $weeklySpendLimit
     */
    private $weeklySpendLimit;

    /**
     * @return int
     */
    public function getAverageCpc()
    {
        return $this->averageCpc;
    }

    /**
     * @param int $averageCpc
     * @return $this
     */
    public function setAverageCpc($averageCpc)
    {
        $this->averageCpc = $averageCpc;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeeklySpendLimit()
    {
        return $this->weeklySpendLimit;
    }

    /**
     * @param int $weeklySpendLimit
     * @return $this
     */
    public function setWeeklySpendLimit($weeklySpendLimit)
    {
        $this->weeklySpendLimit = $weeklySpendLimit;
        return $this;
    }

}