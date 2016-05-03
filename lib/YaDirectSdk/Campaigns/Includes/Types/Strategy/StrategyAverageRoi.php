<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Strategy;


use YaDirectSdk\Includes\JsonData;

class StrategyAverageRoi
{

    use JsonData;

    /**
     * @var integer $reserveReturn
     */
    private $reserveReturn;

    /**
     * @var integer $roiCoef
     */
    private $roiCoef;

    /**
     * @var integer $goalId
     */
    private $goalId;

    /**
     * @var integer $weeklySpendLimit
     */
    private $weeklySpendLimit;

    /**
     * @var integer $bidCeiling
     */
    private $bidCeiling;

    /**
     * @var integer $profitability
     */
    private $profitability;

    /**
     * @return int
     */
    public function getReserveReturn()
    {
        return $this->reserveReturn;
    }

    /**
     * @param int $reserveReturn
     * @return $this
     */
    public function setReserveReturn($reserveReturn)
    {
        $this->reserveReturn = $reserveReturn;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoiCoef()
    {
        return $this->roiCoef;
    }

    /**
     * @param int $roiCoef
     * @return $this
     */
    public function setRoiCoef($roiCoef)
    {
        $this->roiCoef = $roiCoef;
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

    /**
     * @return int
     */
    public function getProfitability()
    {
        return $this->profitability;
    }

    /**
     * @param int $profitability
     * @return $this
     */
    public function setProfitability($profitability)
    {
        $this->profitability = $profitability;
        return $this;
    }

}