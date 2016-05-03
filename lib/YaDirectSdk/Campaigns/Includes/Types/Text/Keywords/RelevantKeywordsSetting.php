<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Keywords;


use YaDirectSdk\Includes\JsonData;

class RelevantKeywordsSetting extends RelevantKeywordsModeEnum
{

    use JsonData;

    /**
     * @var integer $budgetPercent
     */
    private $budgetPercent;

    private $mode;

    /**
     * @var null $optimizeGoalId
     */
    private $optimizeGoalId;

    public function setMode($mode/** @var string (RelevantKeywordsModeEnum const) */)
    {
        $this->mode = $mode;
    }

}