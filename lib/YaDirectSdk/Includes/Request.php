<?php

namespace YaDirectSdk\Includes;


use Psr\Log\LoggerInterface;
use YaDirectSdk\Config\Config;
use YaDirectSdk\Logger\Logger;

abstract class Request extends \ApiRator\Includes\Request implements YaInterface
{

    private $error_code;
    private $error_msg;

    public function __construct(LoggerInterface $loggerInterface = null)
    {
        $this->addHeader('Content-type', 'application/json');

        if (!$loggerInterface) {
            $loggerInterface = new Logger();
        }
        parent::__construct(self::MAGIC_PREFIX, $loggerInterface);
    }

    public function getErrorCode()
    {
        return $this->error_code;
    }

    public function getErrorMsg()
    {
        return $this->error_msg;
    }

    public function answerProcessing($content)
    {
        $json = json_decode($content);
        return $json;
    }

    public function getResultApiUrl()
    {
        list($type, $method) = explode('.', $this->getMethod());

        $access_token = $this->getAccessToken();
        if (!$access_token) {
            $access_token = Config::getParam('access_token', true);
        }

        $this->setParameter('method', $method);
        $this->addHeader('Authorization', 'Bearer ' . $access_token);
        $this->addHeader('Accept-Language', self::API_LANGUAGE);

        $url = self::API_URL . '/' . self::API_TYPE . '/' . self::API_VERSION . '/' . $type;

        return $url;
    }

    public function handleParameters($parameters)
    {
        return json_encode($parameters);
    }

    abstract public function doRequest();

}