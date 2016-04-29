<?php

namespace YaDirectSdk\Includes;


trait JsonData
{

    public function getJsonData($upFirst = true, $exUnder = true)
    {
        $var = get_object_vars($this);
        $data = [];
        foreach ($var as $key => &$value) {
            if (is_null($value)) {
                continue;
            }
            if (is_array($value)) {
                foreach ($value as $v) {
                    if (is_object($v) && method_exists($v, 'getJsonData')) {
                        $value[] = $v->getJsonData();
                        array_shift($value);
                    }
                }
            }
            if (is_object($value) && method_exists($value, 'getJsonData')) {
                $value = $value->getJsonData();
            }

            $pos = 0;
            $first = substr($key, $pos, 1);
            if ($first == '_') {
                if ($exUnder) {
                    continue;
                } else {
                    $pos = strrpos($key, '_') + 1;
                }
            }
            if ($upFirst) {
                $first = strtoupper(substr($key, $pos, 1));
            } else {
                $first = substr($key, $pos, 1);
            }
            $keyName = ($pos ? substr($key, 0, $pos) : '') . $first . substr($key, $pos + 1);

            $data[$keyName] = $value;
        }
        return $data;
    }

}