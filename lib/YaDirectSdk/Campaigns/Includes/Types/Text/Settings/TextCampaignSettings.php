<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Settings;


use YaDirectSdk\Includes\JsonData;

class TextCampaignSettings extends TextCampaignSettingsEnum
{
    use JsonData;

    private $option;
    private $value;

    public function enableOption($option/** @var string (TextCampaignSettingsEnum const) */)
    {
        $this->option = $option;
        $this->value = 'YES';
    }

    public function disableOption($option/** @var string (TextCampaignSettingsEnum const) */)
    {
        $this->option = $option;
        $this->value = 'NO';
    }


}