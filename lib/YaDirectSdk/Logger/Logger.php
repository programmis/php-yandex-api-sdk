<?php

namespace YaDirectSdk\Logger;


use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{

    private $debug = false;

    public function log($level, $message, array $context = array())
    {
        if (
            ($level == 'info' || $level == 'debug')
            && !$this->isDebug()
        ) {
        } else {
            echo '[' . date("Y-m-d H:i:s") . '] php.' . $level . " " . $message . "\n";
        }
    }

    public function enableDebug()
    {
        $this->debug = true;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDebug()
    {
        return $this->debug;
    }

    /**
     * @param boolean $debug
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }
    
}