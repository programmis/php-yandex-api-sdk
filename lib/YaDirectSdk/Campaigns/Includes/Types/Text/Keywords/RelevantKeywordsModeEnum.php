<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Keywords;


abstract class RelevantKeywordsModeEnum
{

    const MINIMUM = 'MINIMUM';
    const OPTIMAL = 'OPTIMAL';
    const MAXIMUM = 'MAXIMUM';
    
    abstract public function setMode($mode /** @var string (RelevantKeywordsModeEnum const) */);

}