<?php

namespace YaDirectSdk\Includes;

use logger\Logger;
use Psr\Log\LoggerInterface;
use YaDirectSdk\Config\Config;

abstract class Request extends \ApiRator\Includes\Request implements YaInterface
{

    private $error_code;
    private $error_msg;
    private $method;
    private $access_token;
    private $api_version;

    public function __construct(LoggerInterface $loggerInterface = null)
    {
        $this->addHeader('Content-type', 'application/json');

        if (!$loggerInterface) {
            $loggerInterface = new Logger();
        }
        parent::__construct(self::MAGIC_PREFIX, $loggerInterface);
    }

    /**
     * @param string $access_token
     *
     * @return Request
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;

        return $this;
    }

    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    public function getMethod()
    {
        $this->method;
    }

    /**
     * @param string $api_version
     *
     * @return Request
     */
    public function setApiVersion($api_version)
    {
        $this->api_version = $api_version;

        return $this;
    }

    public function getApiVersion()
    {
        if ($this->api_version) {
            return $this->api_version;
        }

        return self::API_VERSION;
    }

    public function getAccessToken()
    {
        $this->access_token;
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

        $url = self::API_URL
            . '/' . self::API_TYPE
            . '/' . $this->getApiVersion()
            . '/' . $type;

        return $url;
    }

    public function handleParameters($parameters)
    {
        return json_encode($parameters);
    }

    abstract public function doRequest();

}