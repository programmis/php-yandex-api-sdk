<?php

namespace YaDirectSdk\VCards\Includes;


use YaDirectSdk\Includes\JsonData;

class InstantMessenger
{

    use JsonData;

    /**
     * @var string $messengerClient
     */
    private $messengerClient;

    /**
     * @var string $messengerLogin
     */
    private $messengerLogin;

    /**
     * @return string
     */
    public function getMessengerClient()
    {
        return $this->messengerClient;
    }

    /**
     * @param string $messengerClient
     * @return $this
     */
    public function setMessengerClient($messengerClient)
    {
        $this->messengerClient = $messengerClient;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessengerLogin()
    {
        return $this->messengerLogin;
    }

    /**
     * @param string $messengerLogin
     * @return $this
     */
    public function setMessengerLogin($messengerLogin)
    {
        $this->messengerLogin = $messengerLogin;
        return $this;
    }
    
}