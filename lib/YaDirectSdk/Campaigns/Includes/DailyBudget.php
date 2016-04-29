<?php

namespace YaDirectSdk\Campaigns\Includes;


use YaDirectSdk\Includes\JsonData;

class DailyBudget
{
    use JsonData;

    /**
     * @var integer $name
     */
    private $amount;

    /**
     * @var string $name
     */
    private $mode;
}