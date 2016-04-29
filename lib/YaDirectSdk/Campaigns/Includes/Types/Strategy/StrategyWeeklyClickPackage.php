<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Strategy;


use YaDirectSdk\Includes\JsonData;

class StrategyWeeklyClickPackage
{
    
    use JsonData;

    /**
     * @var integer $clickPerWeek
     */
    private $clickPerWeek;

    /**
     * @var integer $averageCpc
     */
    private $averageCpc;

    /**
     * @var integer $bidCeiling
     */
    private $bidCeiling;

    /**
     * @return int
     */
    public function getClickPerWeek()
    {
        return $this->clickPerWeek;
    }

    /**
     * @param int $clickPerWeek
     * @return $this
     */
    public function setClickPerWeek($clickPerWeek)
    {
        $this->clickPerWeek = $clickPerWeek;
        return $this;
    }

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
    public function getBidCeiling()
    {
        return $this->bidCeiling;
    }

    /**
     * @param int $bidCeiling
     * @return $this
     */
    public function setBidCeiling($bidCeiling)
    {
        $this->bidCeiling = $bidCeiling;
        return $this;
    }
    
}