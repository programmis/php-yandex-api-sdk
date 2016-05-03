<?php

namespace YaDirectSdk\Config;


use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;

class Config
{

    const YA_CONFIG_FILE = "/../../../app/config/config.yml";

    public static function getParam($param, $required = false)
    {
        try {
            $yaml = new Parser();
            $parse = $yaml->parse(
                file_get_contents(
                    __DIR__ . self::YA_CONFIG_FILE
                )
            );
            if (isset($parse['yandexdirect']) && isset($parse['yandexdirect'][$param])) {
                return $parse['yandexdirect'][$param];
            } else {
                throw new ParseException("not found '" . $param . "' config parameter");
            }
        } catch (ParseException $pe) {
            if ($required) {
                throw new \Exception("Unable to parse config: " . $pe->getMessage());
            } else {
                return false;
            }
        }
    }

}