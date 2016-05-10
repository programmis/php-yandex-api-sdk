<?php

namespace YaDirectSdk\Keywords\Includes;


use YaDirectSdk\Includes\JsonData;

class Keyword
{

    use JsonData;

    /**
     * @var string $keyword
     */
    private $keyword;

    /**
     * @var integer $adGroupId
     */
    private $adGroupId;

    /**
     * @var integer $bid
     */
    private $bid;

    /**
     * @var integer $contextBid
     */
    private $contextBid;

    /**
     * @var string $strategyPriority
     */
    private $strategyPriority;

    /**
     * @var string $userParam1
     */
    private $userParam1;

    /**
     * @var string $userParam2
     */
    private $userParam2;

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return $this
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId = $adGroupId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param int $bid
     * @return $this
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return int
     */
    public function getContextBid()
    {
        return $this->contextBid;
    }

    /**
     * @param int $contextBid
     * @return $this
     */
    public function setContextBid($contextBid)
    {
        $this->contextBid = $contextBid;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrategyPriority()
    {
        return $this->strategyPriority;
    }

    /**
     * @param string $strategyPriority
     * @return $this
     */
    public function setStrategyPriority($strategyPriority)
    {
        $this->strategyPriority = $strategyPriority;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserParam1()
    {
        return $this->userParam1;
    }

    /**
     * @param string $userParam1
     * @return $this
     */
    public function setUserParam1($userParam1)
    {
        $this->userParam1 = $userParam1;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserParam2()
    {
        return $this->userParam2;
    }

    /**
     * @param string $userParam2
     * @return $this
     */
    public function setUserParam2($userParam2)
    {
        $this->userParam2 = $userParam2;
        return $this;
    }
    
}