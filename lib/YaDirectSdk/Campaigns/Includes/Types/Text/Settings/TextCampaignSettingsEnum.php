<?php

namespace YaDirectSdk\Campaigns\Includes\Types\Text\Settings;


abstract class TextCampaignSettingsEnum
{

    const ADD_METRICA_TAG = 'ADD_METRICA_TAG';
    const ADD_OPENSTAT_TAG = 'ADD_OPENSTAT_TAG';
    const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    const ENABLE_EXTENDED_AD_TITLE = 'ENABLE_EXTENDED_AD_TITLE';
    const ENABLE_RELATED_KEYWORDS = 'ENABLE_RELATED_KEYWORDS';
    const ENABLE_SITE_MONITORING = 'ENABLE_SITE_MONITORING';
    const EXCLUDE_PAUSED_COMPETING_ADS = 'EXCLUDE_PAUSED_COMPETING_ADS';
    const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
    const REQUIRE_SERVICING = 'REQUIRE_SERVICING';

    abstract public function enableOption($option/** @var string (TextCampaignSettingsEnum const) */);

    abstract public function disableOption($option/** @var string (TextCampaignSettingsEnum const) */);
}