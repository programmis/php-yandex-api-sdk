<?php

namespace YaDirectSdk\Logger;


use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{

    public function log($level, $message, array $context = array())
    {
        echo '[' . date("Y-m-d H:i:s") . '] php.' . $level . " " . $message . "\n";
    }

}