<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Strategy;


use YaDirectSdk\Includes\JsonData;

class StrategyAverageCpa
{

    use JsonData;

    /**
     * @var integer $averageCpa
     */
    private $averageCpa;

    /**
     * @var integer $weeklySpendLimit
     */
    private $weeklySpendLimit;

    /**
     * @var integer $goalId
     */
    private $goalId;

    /**
     * @var integer $bidCeiling
     */
    private $bidCeiling;

    /**
     * @return int
     */
    public function getAverageCpa()
    {
        return $this->averageCpa;
    }

    /**
     * @param int $averageCpa
     * @return $this
     */
    public function setAverageCpa($averageCpa)
    {
        $this->averageCpa = $averageCpa;
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

    /**
     * @return int
     */
    public function getGoalId()
    {
        return $this->goalId;
    }

    /**
     * @param int $goalId
     * @return $this
     */
    public function setGoalId($goalId)
    {
        $this->goalId = $goalId;
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