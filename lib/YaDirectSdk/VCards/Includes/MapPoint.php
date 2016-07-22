<?php

namespace YaDirectSdk\VCards\Includes;


use YaDirectSdk\Includes\JsonData;

class MapPoint
{

    use JsonData;

    /**
     * @var double $x
     */
    private $x;

    /**
     * @var double $y
     */
    private $y;

    /**
     * @var double $x1
     */
    private $x1;

    /**
     * @var double $y1
     */
    private $y1;

    /**
     * @var double $x2
     */
    private $x2;

    /**
     * @var double $y2
     */
    private $y2;

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @return float
     */
    public function getX1()
    {
        return $this->x1;
    }

    /**
     * @param float $x1
     * @return $this
     */
    public function setX1($x1)
    {
        $this->x1 = $x1;
        return $this;
    }

    /**
     * @return float
     */
    public function getY1()
    {
        return $this->y1;
    }

    /**
     * @param float $y1
     * @return $this
     */
    public function setY1($y1)
    {
        $this->y1 = $y1;
        return $this;
    }

    /**
     * @return float
     */
    public function getX2()
    {
        return $this->x2;
    }

    /**
     * @param float $x2
     * @return $this
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;
        return $this;
    }

    /**
     * @return float
     */
    public function getY2()
    {
        return $this->y2;
    }

    /**
     * @param float $y2
     * @return $this
     */
    public function setY2($y2)
    {
        $this->y2 = $y2;
        return $this;
    }
    
}