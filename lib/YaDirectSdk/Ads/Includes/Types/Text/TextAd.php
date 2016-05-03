<?php

namespace YaDirectSdk\Ads\Includes\Types\Text;


use YaDirectSdk\Includes\JsonData;

class TextAd
{

    use JsonData;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $text
     */
    private $text;

    /**
     * @var string $mobile
     */
    private $mobile;

    /**
     * @var string $href
     */
    private $href;

    /**
     * @var integer $vCardId
     */
    private $vCardId;

    /**
     * @var string $adImageHash
     */
    private $adImageHash;

    /**
     * @var integer $sitelinkSetId
     */
    private $sitelinkSetId;

    /**
     * @var string $displayUrlPath
     */
    private $displayUrlPath;

    /**
     * @var array $adExtensionIds
     */
    private $adExtensionIds;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return TextAd
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return TextAd
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return TextAd
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param string $href
     * @return TextAd
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @return int
     */
    public function getVCardId()
    {
        return $this->vCardId;
    }

    /**
     * @param int $vCardId
     * @return TextAd
     */
    public function setVCardId($vCardId)
    {
        $this->vCardId = $vCardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdImageHash()
    {
        return $this->adImageHash;
    }

    /**
     * @param string $adImageHash
     * @return TextAd
     */
    public function setAdImageHash($adImageHash)
    {
        $this->adImageHash = $adImageHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getSitelinkSetId()
    {
        return $this->sitelinkSetId;
    }

    /**
     * @param int $sitelinkSetId
     * @return TextAd
     */
    public function setSitelinkSetId($sitelinkSetId)
    {
        $this->sitelinkSetId = $sitelinkSetId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayUrlPath()
    {
        return $this->displayUrlPath;
    }

    /**
     * @param string $displayUrlPath
     * @return TextAd
     */
    public function setDisplayUrlPath($displayUrlPath)
    {
        $this->displayUrlPath = $displayUrlPath;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdExtensionIds()
    {
        return $this->adExtensionIds;
    }

    /**
     * @param integer $adExtensionId
     * @return TextAd
     */
    public function addAdExtensionId($adExtensionId)
    {
        $this->adExtensionIds[] = $adExtensionId;
        return $this;
    }

}